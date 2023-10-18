<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use Laravel\Sanctum\Sanctum;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('register', [UserController::class, 'createUser']);
Route::post('login', [UserController::class, 'login']);
 Route::middleware('auth:sanctum')->group (function(){;
     Route::post('logout', [UserController::class, 'logout']);
 });

