<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

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
        if (!$token = auth()->attempt($request->only("email", "password"))) return response(null, 401);
        return response()->json(compact("token"));
    }
}
