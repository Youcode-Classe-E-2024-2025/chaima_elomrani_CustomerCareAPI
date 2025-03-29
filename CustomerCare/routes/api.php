<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ResponsesController;
use App\Http\Controllers\TicketsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use L5Swagger\Http\Controllers\SwaggerController;



Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

// tickets CRUD 
Route::get('/showTickets', [TicketsController::class, 'index']);
Route::post('/storeTickets', [TicketsController::class, 'store']);
Route::get('/show/{id}', [TicketsController::class, 'show']);
Route::put('/update/{id}', [TicketsController::class, 'update']);
Route::delete('/destroy/{id}', [TicketsController::class, 'destroy']);

// responses CRUD 
Route::get('/showResponse', [ResponsesController::class, 'index']);
Route::post('/storeResponse', [ResponsesController::class, 'store']);
Route::get('/showResponse/{id}', [ResponsesController::class, 'show']);
Route::put('/updateResponse/{id}', [ResponsesController::class, 'update']);
Route::delete('/destroyResponse/{id}', [ResponsesController::class, 'destroy']);

// Swagger routes
// Route::get('/api/documentation', [SwaggerController::class, 'apiDocumentation']);