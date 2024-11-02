<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\TampilanController;
use App\Http\Middleware\BlockDirectLoginAccess;
use App\Http\Middleware\EnsureAuth;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/berita', 'berita')->name('berita');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/visi', 'visi')->name('visi');
    // Route::get('/berita', 'berita')->name('berita');

});

Route::get('/lock', function () {
    return view('block.index');
})->name('block');

Route::prefix('admin')->group(function () {});

Route::middleware([BlockDirectLoginAccess::class])->group(function () {

    Route::middleware([RedirectIfAuthenticated::class])->group(function () {
        Route::get('auth/login', [AuthController::class, 'loginForm'])->name('login');
        Route::post('auth/login', [AuthController::class, 'login']);
    });

    Route::middleware([EnsureAuth::class])->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/dashboard', [TampilanController::class, 'dashboard'])->name('dashboard');
        Route::get('/tampilan', [TampilanController::class, 'TampilanSlide'])->name('Tampilan');

        Route::resource('/users', AuthController::class);
        Route::resource('/roles', RoleController::class);
        Route::resource('/slides', SlideController::class);
        Route::resource('/jabatans', JabatanController::class);
        Route::resource('/karyawans', KaryawanController::class);
        Route::resource('/abouts', AboutController::class);
        Route::resource('/blogs', BlogController::class);
        Route::resource('/contacts', ContactController::class);
    });
});

Route::post('/contact', [ContactController::class,'contact'])->name('contact');
