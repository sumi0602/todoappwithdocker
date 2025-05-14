<?php

use App\Http\Controllers\GreetingController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('todos',TodoController::class);
Route::get('/greetings/{role}', [GreetingController::class, 'showGreetings']);

