<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware("guest");
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            "name" => ["required", "string", "max:75"],
            "email" => ["required", "string", "email", "max:50", "unique:users"],
            "username" => ["required", "string", "min:4", "max:50", "unique:users"],
            "password" => ["required", "string", "min:8", "max:50", "confirmed"]
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            "name" => $data["name"],
            "email" => $data["email"],
            "username" => $data["username"],
            "password" => Hash::make($data["password"])
        ]);
    }

    /**
     * Valid register data and then create a new user instance.
     *
     * @param   \Illuminate\Http\Request $request
     * @return  \Illuminate\Support\Facades\Response
     */
    public function register(Request $request)
    {
        $validation = $this->validator($request->all());

        if ($validation->fails()) return response()->json(["errors" => $validation->errors()]);

        $user = $this->create($request->all());
        return response()->json(compact("user"));
    }
}
