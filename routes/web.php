<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowcaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     // dd('test');
//     return view('welcome');
// });

// Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('arabic')->group(function () {
    Route::get('/', [ShowcaseController::class, 'index'])->name('home');
});

Route::prefix('english')->group(function () {
    Route::get('/', [ShowcaseController::class, 'index'])->name('home');
});

Route::prefix('french')->group(function () {
    Route::get('/', [ShowcaseController::class, 'index'])->name('home');
});
