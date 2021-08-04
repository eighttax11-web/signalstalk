<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'authenticate']);

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('users-list',[UserController::class, 'list']);
    Route::get('users-search/{search}',[UserController::class, 'search']);
    Route::post('user',[UserController::class, 'getAuthenticatedUser']);
    Route::delete('users-delete/{id}',[UserController::class, 'delete']);
});
