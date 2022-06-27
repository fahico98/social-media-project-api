<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(["prefix" => "auth", "namespace" => "Auth"], function(){
    Route::post("signin", "SignInController");
    Route::post("signout", "SignOutController");
    Route::get("me", "MeController");
    Route::post("register", "RegisterController@register");
});

Route::group(["prefix" => "user"], function(){
    // Route::apiResource("/user", "UserController")->except(["store"]);
    Route::post("follow", "UserController@follow");
    Route::post("unfollow", "UserController@unfollow");
});

Route::group(["prefix" => "post"], function(){
    // Route::apiResource("post", "PostController");
    Route::get("/", "PostController@index");
    Route::post("like", "PostController@like");
    Route::post("dislike", "PostController@dislike");
    Route::post("undo-like", "PostController@undoLike");
    Route::post("undo-dislike", "PostController@undoDislike");
});
