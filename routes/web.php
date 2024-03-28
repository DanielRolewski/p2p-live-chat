<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('rooms.create');
});

Route::get('/rooms', function () {
    return view('rooms.index');
});