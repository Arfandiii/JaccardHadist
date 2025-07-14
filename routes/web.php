<?php

use App\Http\Controllers\Admin\BukuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\DataController;
use App\Http\Controllers\Admin\HadistController;
use App\Http\Controllers\Admin\HistoryQueryController;
use App\Http\Controllers\Admin\KitabController;
use App\Http\Controllers\Admin\PerawiController;
use App\Http\Controllers\PreprocessingController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SearchController;

Route::get('/', [PageController::class, 'hero'])->name('hero');
Route::get('/buku', [PageController::class, 'buku'])->name('buku');
Route::get('/hadist', [PageController::class, 'hadist'])->name('hadist');
Route::get('/result', [PreprocessingController::class, 'resultPreprocessing'])->name('result');


Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate']);
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'store']);
});

Route::get('/preprocess-all-hadist', [PreprocessingController::class, 'preprocessAllHadist'])->name('preprocess.hadist');
Route::post('/process-query', [PreprocessingController::class, 'preprocessQuery'])->name('process.query');
Route::match(['get', 'post'], '/hadist/search', [SearchController::class, 'search'])->name('hadist.process');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [AdminDashboardController::class, 'profile'])->name('dashboard.profile');
    Route::get('/profile/edit', [AdminDashboardController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [AdminDashboardController::class, 'update'])->name('profile.update');
    Route::post('/admin/password/update', [AdminDashboardController::class, 'updatePassword'])->name('dashboard.password.update');
    Route::get('/data', [DataController::class, 'index'])->name('dashboard.data');
    Route::resource('buku', BukuController::class);
    Route::resource('kitab', KitabController::class);
    Route::resource('perawi', PerawiController::class);
    Route::resource('hadist', HadistController::class);
    Route::delete('/history/destroy-all', [HistoryQueryController::class, 'destroyAll'])->name('history.destroyAll');
    Route::resource('history', HistoryQueryController::class);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});