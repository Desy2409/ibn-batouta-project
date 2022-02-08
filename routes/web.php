<?php

use App\Http\Controllers\CookieController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
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

    Route::get('/arabic', [HomeController::class, 'translateInArabic'])->name('arabic');

    Route::get('/english', [HomeController::class, 'translateInEnglish'])->name('english');

    Route::get('/french', [HomeController::class, 'translateInFrench'])->name('french');

// Route::get('/cookie/set',[CookieController::class,'setCookie']);
// Route::get('/cookie/get',[CookieController::class,'getCookie']);


// Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => [LanguageController::class,'switchLang']]);