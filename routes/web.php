<?php

use App\Http\Controllers\admin_side\AdminAuthController;
use App\Http\Controllers\admin_side\AdminProfileController;
use App\Http\Controllers\Client_side\HomeController;
use App\Http\Controllers\Client_side\AboutController;
use App\Http\Controllers\Client_side\MenuController;
use App\Http\Controllers\Client_side\StoriesController;
use App\Http\Controllers\Client_side\ContactController;
use App\Http\Controllers\Client_side\ReservationController;
use App\Http\Controllers\Client_side\LoginController;
use App\Http\Controllers\Client_side\RegistrationController;
use App\Http\Controllers\Client_side\ForgetPasswordController;
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

// Admin Side Route


Route::get('/layouts/fluid', [Fluid::class, 'index'])->name('layouts-fluid');

Route::get('/layouts/without-menu', [WithoutMenu::class, 'index'])->name('layouts-without-menu');
Route::get('/layouts/without-navbar', [WithoutNavbar::class, 'index'])->name('layouts-without-navbar');
Route::get('/layouts/container', [Container::class, 'index'])->name('layouts-container');
Route::get('/layouts/blank', [Blank::class, 'index'])->name('layouts-blank');

Route::group(['prefix' => '/admin', 'as' => 'admin'], function () {
    
    
    Route::get('/login', [AdminAuthController::class, 'login'])->name('.login');
    Route::post('/login/check', [AdminAuthController::class, 'loginCheck'])->name('.login.check');
    Route::get('/registration', [AdminAuthController::class, 'registration'])->name('.registration');
    Route::post('/registration/store', [AdminAuthController::class, 'registrationStore'])->name('.registration.store');
    Route::get('/forget-password', [AdminAuthController::class, 'forgetPassword'])->name('.forget-password');
    
    Route::group(['middleware' => 'adminLogin'] , function(){
        Route::get('/', [Analytics::class, 'index']);
        Route::get('/logout', [AdminAuthController::class, 'logOut'])->name('.logout');
        Route::get('/profile',[AdminProfileController::class,'index'])->name('.profile');
    });
    

});


// Client Side Routes

Route::get('/', [HomeController::class, 'home']);
Route::group(['prefix' => '/user', 'as' => 'user'], function () {
    Route::get('/about', [AboutController::class, 'about'])->name('.about');
    Route::get('/menu', [MenuController::class, 'menu'])->name('.menu');
    Route::get('/stories', [StoriesController::class, 'stories'])->name('.stories');
    Route::get('/contact', [ContactController::class, 'contact'])->name('.contact');
    Route::get('/reservation', [ReservationController::class, 'reservation'])->name('.reservation');
    Route::get('/login', [LoginController::class, 'login'])->name('.login');
    Route::get('/registration', [RegistrationController::class, 'registration'])->name('.registration');
    Route::get('/forget_password', [ForgetPasswordController::class, 'forget_password'])->name('.forget_password');
});
