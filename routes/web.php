<?php

use App\Livewire\AboutComponent;
use App\Livewire\Admin\DashboardComponent;
use App\Livewire\ContactComponent;
use App\Livewire\HomeComponent;
use App\Livewire\SignInComponent;
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

Route::get('/', HomeComponent::class)->name('home');
Route::get('about', AboutComponent::class)->name('about');
Route::get('contact', ContactComponent::class)->name('contact');
Route::get('signin', SignInComponent::class)->name('signin');

Route::middleware('auth','authadmin')->group(function () {
    Route::get('/admin/dashboard', DashboardComponent::class)->name('admin.dashboard');
});