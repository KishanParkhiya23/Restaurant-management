<?php

use App\Http\Controllers\Client_side\HomeController;
use App\Http\Controllers\Client_side\AboutController;
use App\Http\Controllers\Client_side\MenuController;
use App\Http\Controllers\Client_side\StoriesController;
use App\Http\Controllers\Client_side\ContactController;
use App\Http\Controllers\Client_side\ReservationController;
use App\Http\Controllers\dashboard\Analytics;
use App\Http\Controllers\layouts\Blank;
use App\Http\Controllers\layouts\Container;
use App\Http\Controllers\layouts\Fluid;
use App\Http\Controllers\layouts\WithoutMenu;
use App\Http\Controllers\layouts\WithoutNavbar;
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

$controller_path = 'App\Http\Controllers';

// Main Page Route
Route::get('/', [Analytics::class, 'index'])->name('dashboard-analytics');


Route::get('/layouts/fluid', [Fluid::class, 'index'])->name('layouts-fluid');

Route::get('/layouts/without-menu', [WithoutMenu::class, 'index'])->name('layouts-without-menu');
Route::get('/layouts/without-navbar', [WithoutNavbar::class, 'index'])->name('layouts-without-navbar');
Route::get('/layouts/container', [Container::class, 'index'])->name('layouts-container');
Route::get('/layouts/blank', [Blank::class, 'index'])->name('layouts-blank');


// Client Site Routes
Route::get('/user/',[HomeController::class,'home'])->name('user');
Route::get('/user/about/',[AboutController::class,'about'])->name('user.about');
Route::get('/user/menu/',[MenuController::class,'menu'])->name('user.menu');
Route::get('/user/stories/',[StoriesController::class,'stories'])->name('user.stories');
Route::get('/user/contact/',[ContactController::class,'contact'])->name('user.contact');
Route::get('/user/reservation/',[ReservationController::class,'reservation'])->name('user.reservation');
