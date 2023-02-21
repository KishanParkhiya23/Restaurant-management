<?php

use App\Http\Controllers\admin_side\AdminAuthController;
use App\Http\Controllers\admin_side\AdminProfileController;
use App\Http\Controllers\admin_side\ChefController;
use App\Http\Controllers\admin_side\MenuController as Admin_sideMenuController;
use App\Http\Controllers\admin_side\PasswordManageController;
use App\Http\Controllers\Client_side\HomeController;
use App\Http\Controllers\Client_side\AboutController;
use App\Http\Controllers\Client_side\StoriesController;
use App\Http\Controllers\Client_side\ContactController;
use App\Http\Controllers\Client_side\ReservationController;
use App\Http\Controllers\Client_side\LoginController;
use App\Http\Controllers\Client_side\RegistrationController;
use App\Http\Controllers\Client_side\ForgetPasswordController;
use App\Http\Controllers\Client_side\ProfileController;
use App\Http\Controllers\Client_side\MenuController;
use App\Http\Controllers\Client_side\OrderController;
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

  Route::post('/send-mail', [PasswordManageController::class, 'sendMail'])->name('.send.mail');

  Route::group(['middleware' => 'changePassword'], function () {
    Route::get('/change/password', [PasswordManageController::class, 'showChangePassword'])->name('.change.password');
    Route::post('/change/save/password', [PasswordManageController::class, 'saveChangePassword'])->name('.change.save.password');
  });

  Route::get('/404', function () {
    return view('errors.404');
  })->name('/404')->name('.404');

  Route::group(['middleware' => 'adminLogin'], function () {
    Route::get('/', [Analytics::class, 'index']);
    Route::get('/logout', [AdminAuthController::class, 'logOut'])->name('.logout');
    Route::get('/profile', [AdminProfileController::class, 'index'])->name('.profile');
    Route::post('/profile/save', [AdminProfileController::class, 'profileSave'])->name('.profile.save');
    Route::get('/profile/change/password', [AdminProfileController::class, 'changePassword'])->name('.profile.change.password');
    Route::post('/profile/check/password', [AdminProfileController::class, 'checkPassword'])->name('.profile.check.password');

    Route::group(['prefix' => '/menu', 'as' => '.menu'], function () {
      Route::get('/breakfast', [Admin_sideMenuController::class, 'breakfastShow'])->name('.breakfast.show');
      Route::get('/lunch', [Admin_sideMenuController::class, 'lunchShow'])->name('.lunch.show');
      Route::get('/dinner', [Admin_sideMenuController::class, 'dinnerShow'])->name('.dinner.show');
      Route::get('/drinks', [Admin_sideMenuController::class, 'drinksShow'])->name('.drinks.show');
      Route::get('/desserts', [Admin_sideMenuController::class, 'dessertsShow'])->name('.desserts.show');
      Route::get('/wine', [Admin_sideMenuController::class, 'wineShow'])->name('.wine.show');

      // edit food menu
      Route::get('/add/food/show/{type}', [Admin_sideMenuController::class, 'addFoodShow'])->name('.add.food.show');
      Route::post('/add/food/save/{type}', [Admin_sideMenuController::class, 'addFoodSave'])->name('.add.food.save');
      Route::delete('/delete/food/{id}', [Admin_sideMenuController::class, 'deleteFood'])->name('.delete.food');
      Route::get('/edit/food/show/{id}', [Admin_sideMenuController::class, 'editFoodShow'])->name('.edit.food.show');
      Route::post('/edit/food/save/{id}', [Admin_sideMenuController::class, 'editFoodSave'])->name('.edit.food.save');
    });
  });

  Route::group(['prefix' => '/chef', 'as' => '.chef'], function () {
    Route::get('/dashboard', [ChefController::class, 'index'])->name('.dashboard');
    Route::get('/add/show', [ChefController::class, 'showAddChef'])->name('.add.show');
    Route::post('/add/save', [ChefController::class, 'saveAddChef'])->name('.add.save');
    Route::get('/edit/{id}', [ChefController::class, 'edit'])->name('.edit');
    Route::post('/edit/save/{id}', [ChefController::class, 'editSave'])->name('.edit.save');
    Route::delete('/delete/{id}', [ChefController::class, 'deleteChef'])->name('.delete');
  });
});


// Client Side Routes


Route::get('/', [HomeController::class, 'home'])->name('home');

Route::group(['prefix' => '/user', 'as' => 'user'], function () {

  Route::get('/about', [AboutController::class, 'about'])->name('.about');
  Route::get('/stories', [StoriesController::class, 'stories'])->name('.stories');
  Route::get('/contact', [ContactController::class, 'contact'])->name('.contact');
  Route::get('/login', [LoginController::class, 'login'])->name('.login');
  Route::post('/logincheck', [LoginController::class, 'logincheck'])->name('.login.check');
  Route::get('/registration', [RegistrationController::class, 'registration'])->name('.registration');
  Route::post('/regdatasave', [RegistrationController::class, 'regdatasave'])->name('.regdatasave');
  Route::get('/forget_password', [ForgetPasswordController::class, 'forget_password'])->name('.forget_password');

  Route::group(['middleware' => ['Ulogin']], function () {

    Route::get('/menu', [MenuController::class, 'menu'])->name('.menu');
    Route::get('/reservation', [ReservationController::class, 'reservation'])->name('.reservation');
    Route::get('/Ulogout', [LoginController::class, 'Ulogout'])->name('.Ulogout');
    Route::get('/yourorder', [OrderController::class, 'yourorder'])->name('.yourorder');
    Route::get('/vieworder', [OrderController::class, 'vieworder'])->name('.vieworder');
    Route::get('/order/{id}', [OrderController::class, 'order'])->name('.forder');
    Route::post('/change/cart/{id}', [OrderController::class, 'changeCart'])->name('.change.cart');

    Route::post('/change/name',[LoginController::class,'changeName'])->name('.change.name');


    Route::get('/pchange_password', [ForgetPasswordController::class, 'pchange_password'])->name('.pchange_password');
    Route::post('/pcheckpassword', [ForgetPasswordController::class, 'pcheckpassword'])->name('.pcheckpassword');
    Route::get('/changepassword', [LoginController::class, 'changepassword'])->name('.changepassword');
    Route::post('/Usavechangepassword', [LoginController::class, 'Usavechangepassword'])->name('.Usavechangepassword');

    // Cart routes
    Route::post('/addtocart/{id}', [OrderController::class, 'addtocart'])->name('.addtocart');
    Route::get('/your-cart', [OrderController::class, 'yourCart'])->name('.your-cart');
    Route::delete('/remove/item/{id}',[OrderController::class,'removeItem'])->name('.remove.item');
    Route::get('/save/order',[OrderController::class,'saveOrder'])->name('.save.order');
  });
});
