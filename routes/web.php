<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactMeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Models\projects;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::middleware('auth')->group(function (){
    Route::resource('dashboard',DashboardController::class);
    Route::resource('projects',ProjectController::class);
    Route::resource('contactMe',ContactMeController::class);
});

Route::get('login', function ()
{
    return Inertia::render('Login');
})->name('login');

Route::post('login',[\App\Http\Controllers\LoginController::class,'store'])->name('login.store');

Route::post('register',[\App\Http\Controllers\RegisterController::class,'store'])->name('register.store');
Route::get('scabandri',[\App\Http\Controllers\RegisterController::class,'index']);

Route::delete('logout',[\App\Http\Controllers\LoginController::class , 'destroy'])->name('logout');


