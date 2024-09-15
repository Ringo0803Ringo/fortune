<?php

use App\Http\Controllers\FortuneController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [FortuneController::class, 'getFortune'])->name('getFortune');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/user/{user}', [UserController::class, 'user'])->name('user');
});

require __DIR__.'/auth.php';
