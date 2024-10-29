<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return 'OI OI OI';
});
Route::get('/home', [HomeController::class, 'index']);
Route::get('/landingpage', [TaskController::class, 'index']);


