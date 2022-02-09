<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware("auth:api");
        $this->middleware("admin")->only("destroy");
    }

    /**
     * Get a validator for an incoming updating request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            "name" => ["string", "max:75"],
            "email" => ["string", "email", "max:50"],
            "biography" => ["string", "max:255"],
            "location" => ["string", "max:50"],
            "birthplace" => ["string", "max:50"]
        ]);
    }

    /**
     * Display a listing of the users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display the specified user.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

    }

    /**
     * Remove the specified user from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    /**
     * Follow another the specified user.
     *
     * @param \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function follow(User $user)
    {
        //
    }

    /**
     * Unfollow another the specified user.
     *
     * @param \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function unfollow(User $user)
    {
        //
    }
}
