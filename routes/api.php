<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controller\AuthController;
use App\http\Controller\post;
use App\http\Controller\NewPasswordController;
use App\http\Controller\ProfileController;


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


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("login", [AuthController::class, "login"]);
Route::post("register", [AuthController::class, "register"]);
Route::post("forgot-password", [NewPasswordController::class, "forgotPassword"]);
Route::post("reset-password", [NewPasswordController::class, "reset"]);
Route::post("logout", [AuthController::class, "logout"]);



 
