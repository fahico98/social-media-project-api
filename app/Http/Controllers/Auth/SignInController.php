<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

use App\Models\User;

class SignInController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware("guest");
    }

    public function __invoke(Request $request)
    {
        $credentials = ["password" => $request->password];

        if(User::where("username", $request->email_username)->exists()){
            $credentials["email"] = User::where("username", $request->email_username)
                ->first()
                ->email;
        }else{
            $credentials["email"] = $request->email_username;
        }

        if (!$token = auth()->attempt($credentials)) return response("Unauthorized", 401);
        return response()->json(compact("token"), 200);
    }
}
