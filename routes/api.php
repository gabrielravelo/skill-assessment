<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/random-quotes/{number}', [QuoteController::class, 'randomQuotes'])
        ->name('random-quotes');
    
    Route::get('/favorite-quotes', [QuoteController::class, 'favoriteQuotes'])
        ->name('favorite-quotes');
    
    Route::post('/delete-quote/{id}', [QuoteController::class, 'deleteQuote'])
        ->name('delete-quote');
    
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});


Route::post('login', [AuthController::class, 'login'])
    ->name('login');

