<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TicketsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'login']);


//CRUD methods
Route::get('/showTickets', [TicketsController::class, 'index']);
Route::post('/storeTickets', [TicketsController::class, 'store']);
Route::get('/show/{id}', [TicketsController::class, 'show']);
Route::put('/update/{id}', [TicketsController::class, 'update']);
Route::delete('/destroy/{id}', [TicketsController::class, 'destroy']);

