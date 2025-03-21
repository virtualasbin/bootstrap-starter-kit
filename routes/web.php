<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Dashboard;
use App\Livewire\Settings;
use App\Livewire\Profile;

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)->name('login');
    Route::get('register', Register::class)->name('register');
});

Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return redirect('dashboard');
    })->name('home');

    Route::get('/dashboard', Dashboard::class)->name('home');
    Route::get('/settings', Settings::class)->name('settings');
    Route::get('/profile', Profile::class)->name('profile');

    Route::post('logout', function () {
        auth()->logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect('/');
    })->name('logout');
});

Route::get('/', function () {
    return view('welcome');
});
