<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdmissionController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\TrainingController;
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



Route::prefix('ibn-batouta-admin')->group(function () {
    Auth::routes();
});
Route::prefix('admin-area')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/partner', [PartnerController::class, 'index'])->name('partner.index');
    Route::post('/partner', [PartnerController::class, 'store'])->name('partner.store');

    Route::get('/about', [AboutController::class, 'index'])->name('about.index');
    Route::post('/about', [AboutController::class, 'store'])->name('about.store');

    Route::get('/admission-requirement', [AdmissionController::class, 'index'])->name('admission.index');
    Route::post('/admission-requirement', [AdmissionController::class, 'store'])->name('admission.store');

    Route::get('/information', [InformationController::class, 'index'])->name('information.index');
    Route::post('/information', [InformationController::class, 'store'])->name('information.store');

    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

    Route::get('/training', [TrainingController::class, 'index'])->name('training.index');
    Route::post('/training', [TrainingController::class, 'store'])->name('training.store');
});
