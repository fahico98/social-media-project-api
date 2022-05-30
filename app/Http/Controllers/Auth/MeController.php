<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\User;

class MeController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth:api");
    }

    public function __invoke()
    {
        $user = auth()->user();
        return response()->json(compact("user"));
    }
}
