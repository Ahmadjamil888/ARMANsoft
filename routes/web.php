<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController; // add this to handle logout
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

// About page route
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
// Home route with login & dashboard buttons
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Dashboard route with real-time user and visitor data (auth required)
Route::get('/dashboard', function () {
    $totalUsers = DB::table('users')->count();
    $totalVisitors = DB::table('visitors')
        ->where('created_at', '>=', now()->subDay())
        ->distinct('ip_address')
        ->count('ip_address');

    return view('home', [
        'totalUsers' => $totalUsers,
        'totalVisitors' => $totalVisitors,
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile routes (auth required)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Show reset-password view on /admin/settings URL and pass $request to view
Route::get('/admin/settings', function (Request $request) {
    return view('auth.reset-password', ['request' => $request]);
})->name('admin.settings');

// Logout route must be POST method
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Load all Laravel Breeze/Fortify/etc. auth routes (login, register, etc.)
require __DIR__ . '/auth.php';

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


