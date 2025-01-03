<?php

use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\LoginComponent;
use App\Http\Livewire\User\DataPortfolioStep;
use App\Http\Livewire\User\UserDashboard;
use App\Http\Livewire\UserLoginComponent;
use App\Http\Livewire\UserRegisterComponent;
use App\Http\Livewire\TestimonialComponent;
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
//     return view('welcome');
// });

// Generate routes goes here
Route::get('/', HomeComponent::class);
Route::get('/testimonial', TestimonialComponent::class);

Route::get('/user-login', UserLoginComponent::class);
Route::get('user-register', UserRegisterComponent::class);

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

// Secured route goes here

// User::middleware
Route::middleware(['auth:sanctum','verified'])->group(function () {
    Route::get('/user/dashboard', UserDashboard::class)->name('user.dashboard');
    Route::get('/user/portfolio-steps', DataPortfolioStep::class)->name('user.portfolio-steps');
});


// Admin::middleware
Route::middleware(['auth:sanctum','verified', 'authadmin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboard::class)->name('admin.dashboard');;
});
