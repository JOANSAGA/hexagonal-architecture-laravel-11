<?php

use Illuminate\Support\Facades\Route;
use App\User\Infrastructure\Http\Controllers\UserController;

Route::group(['prefix' => 'user'], function () {
    Route::get('/{id}', [UserController::class, 'getUser']);
    Route::post('/', [UserController::class, 'registerUser']);
});
