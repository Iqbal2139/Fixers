<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoachController;


Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/teams', function () {
    return view('teams');
});

Route::get('/coaches', [CoachController::class, 'showCoaches'])->name('coaches');