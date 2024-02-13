<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// there will not be a home view, just the dashboard
Route::get('/', function() {
    return redirect()->route('dashboard');
})->middleware('auth');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// all the routes inside the app requires an authorized and verified user
// Route::middleware(['web', 'banned'])->group(function () {

// });
Route::middleware(['auth', 'verified', 'banned'])->group(function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('admin/dashboard', [DashboardController::class, 'admin'])->name('admin.dashboard');
    Route::get('/banned', [DashboardController::class, 'banned'])->name('banned');

    Route::get('quotes', [QuoteController::class, 'index'])->name('quotes');
});

require __DIR__.'/auth.php';
