<?php

use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;

// Room routes
Route::get('/rooms/create', [RoomController::class, 'create']);
Route::get('/', [RoomController::class, 'create']);
Route::post('/rooms', [RoomController::class, 'store']);
Route::get('/rooms/{id}', [RoomController::class, 'show']);

// User routes
Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store']);

// Sending message routes
Route::post('/chat/send-message', [ChatController::class, 'store'])->name('chat.send');
