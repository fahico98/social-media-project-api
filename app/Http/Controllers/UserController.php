<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return  void
     */
    public function __construct()
    {
        $this->middleware("auth:api");
        $this->middleware("admin")->only("destroy");
    }

    /**
     * Get a validator for an incoming updating request.
     *
     * @param   array $data
     * @return  \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            "name" => ["string", "max:75"],
            "email" => ["string", "email", "max:50"],
            "username" => ["string", "max:50"],
            "biography" => ["string", "max:255"],
            "location" => ["string", "max:50"],
            "birthplace" => ["string", "max:50"],
            "marital_status" => [Rule::in(["none", "single", "engaged", "married"])]
        ]);
    }

    /**
     * Display a listing of the users.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display the specified user.
     *
     * @param   \App\Models\User $user
     * @return  \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return response()->json(compact("user"), 200);
    }

    /**
     * Update the specified user in storage.
     *
     * @param   \Illuminate\Http\Request $request
     * @param   \App\Models\User $user
     * @return  \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validation = $this->validator($request->all());

        if ($validation->fails()) return response()->json(["errors" => $validation->errors()]);
        $user->update($request->all());
        return response()->json(compact("user"), 200);
    }

    /**
     * Remove the specified user from storage.
     *
     * @param   \App\Models\User $user
     * @return  \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response("success", 200);
    }

    /**
     * Follow another specified user.
     *
     * @param   \Illuminate\Http\Request $request
     * @return  \Illuminate\Http\Response
     */
    public function follow(Request $request)
    {
        $followed = User::find($request->user_id);
        $follower = auth()->user();

        $alreadyFollowed = DB::table("followed_follower")->where([
            ["followed_id", "=", $followed->id],
            ["follower_id", "=", $follower->id]
        ])->exists();

        if ($alreadyFollowed) return response("already followed", 200);

        DB::table("followed_follower")->insert([
            "followed_id" => $followed->id,
            "follower_id" => $follower->id
        ]);

        return response("success", 200);
    }

    /**
     * Unfollow another specified user.
     *
     * @param   \Illuminate\Http\Request $request
     * @return  \Illuminate\Http\Response
     */
    public function unfollow(Request $request)
    {
        $followed = User::find($request->user_id);
        $follower = auth()->user();

        $alreadyUnfollowed = DB::table("followed_follower")->where([
            ["followed_id", "=", $followed->id],
            ["follower_id", "=", $follower->id]
        ])->doesntExist();

        if ($alreadyUnfollowed) return response("already unfollowed", 200);

        DB::table("followed_follower")->where([
            ["followed_id", "=", $followed->id],
            ["follower_id", "=", $follower->id]
        ])->delete();

        return response("success", 200);
    }
}
