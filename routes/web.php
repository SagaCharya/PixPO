<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Hamcrest\Core\Set;
use Illuminate\Support\Facades\Route;

Route::get('/',[JobController::class, 'index']);
Route::get('/jobs/create',[JobController::class, 'create']);
Route::post('/jobs',[JobController::class, 'store'])->middleware('auth');



Route::get('/search',SearchController::class);
Route::get('/tags/{tag:name}',TagController::class);


Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);
    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
});



Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');



