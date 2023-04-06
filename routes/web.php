<?php

use App\Http\Controllers\admin_side\AdminAuthController;
use App\Http\Controllers\admin_side\AdminProfileController;
use App\Http\Controllers\admin_side\ChefController;
use App\Http\Controllers\admin_side\MenuController as Admin_sideMenuController;
use App\Http\Controllers\admin_side\PasswordManageController;
use App\Http\Controllers\admin_side\ChefAdminController;
use App\Http\Controllers\admin_side\ContactController as Admin_sideContactController;
use App\Http\Controllers\admin_side\StoriesManagementController;
use App\Http\Controllers\admin_side\UserDetailsController;
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
use App\Http\Controllers\Client_side\PlaceOrderController;
use App\Http\Controllers\dashboard\Analytics;
use App\Http\Controllers\layouts\Blank;
use App\Http\Controllers\layouts\Container;
use App\Http\Controllers\layouts\Fluid;
use App\Http\Controllers\layouts\WithoutMenu;
use App\Http\Controllers\layouts\WithoutNavbar;
use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;

$controller_path = 'App\Http\Controllers';

// Admin Side Route

Route::get('/layouts/fluid', [Fluid::class, 'index'])->name('layouts-fluid');

Route::get('/layouts/without-menu', [WithoutMenu::class, 'index'])->name('layouts-without-menu');
Route::get('/layouts/without-navbar', [WithoutNavbar::class, 'index'])->name('layouts-without-navbar');
Route::get('/layouts/container', [Container::class, 'index'])->name('layouts-container');
Route::get('/layouts/blank', [Blank::class, 'index'])->name('layouts-blank');

// Admin routes starts from here

Route::group(['prefix' => '/admin', 'as' => 'admin'], function () {

  Route::get('/login', [AdminAuthController::class, 'login'])->name('.login');
  Route::post('/login/check', [AdminAuthController::class, 'loginCheck'])->name('.login.check');
  Route::get('/registration', [AdminAuthController::class, 'registration'])->name('.registration');
  Route::post('/registration/store', [AdminAuthController::class, 'registrationStore'])->name('.registration.store');
  Route::get('/forget-password', [AdminAuthController::class, 'forgetPassword'])->name('.forget-password');

  Route::post('/send-mail/{type?}', [PasswordManageController::class, 'sendMail'])->name('.send.mail');

  Route::group(['middleware' => 'changePassword'], function () {
    Route::get('/change/password', [PasswordManageController::class, 'showChangePassword'])->name('.change.password');
    Route::post('/change/save/password/{type?}', [PasswordManageController::class, 'saveChangePassword'])->name('.change.save.password');
  });



  Route::get(
    '/404',
    function () {
      return view('errors.404');
    }
  )->name('/404')->name('.404');

  Route::group(['middleware' => 'adminLogin'], function () {
    Route::get('/', [Analytics::class, 'index']);
    Route::get('/logout', [AdminAuthController::class, 'logOut'])->name('.logout');
    Route::get('/profile', [AdminProfileController::class, 'index'])->name('.profile');
    Route::post('/profile/save', [AdminProfileController::class, 'profileSave'])->name('.profile.save');
    Route::get('/profile/change/password', [AdminProfileController::class, 'changePassword'])->name('.profile.change.password');
    Route::post('/profile/check/password', [AdminProfileController::class, 'checkPassword'])->name('.profile.check.password');

    Route::get('/get/order-percentage', [Analytics::class, 'getOrderPercentage'])->name('.get.order-percentage');

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

    Route::group(['prefix' => '/chef', 'as' => '.chef'], function () {
      Route::get('/dashboard', [ChefController::class, 'index'])->name('.dashboard');
      Route::get('/add/show', [ChefController::class, 'showAddChef'])->name('.add.show');
      Route::post('/add/save', [ChefController::class, 'saveAddChef'])->name('.add.save');
      Route::get('/edit/{id}', [ChefController::class, 'edit'])->name('.edit');
      Route::post('/edit/save/{id}', [ChefController::class, 'editSave'])->name('.edit.save');
      Route::delete('/delete/{id}', [ChefController::class, 'deleteChef'])->name('.delete');
    });

    Route::group(['prefix' => '/chef-admin', 'as' => '.chef-management'], function () {
      Route::get('/dashboard', [ChefAdminController::class, 'index'])->name('.dashboard');
      Route::get('/pending', [ChefAdminController::class, 'pendingShow'])->name('.pending.show');
      Route::get('/processing', [ChefAdminController::class, 'processingShow'])->name('.processing.show');
      Route::get('/completed', [ChefAdminController::class, 'completedShow'])->name('.completed.show');
      Route::get('/cancel', [ChefAdminController::class, 'cancelShow'])->name('.cancel.show');

      Route::get('/order/accept/{id}', [ChefAdminController::class, 'acceptOrder'])->name('.accept.order');
      Route::get('/order/cancel/{id}', [ChefAdminController::class, 'cancelOrder'])->name('.cancel.order');
      Route::get('/order/complete/{id}', [ChefAdminController::class, 'completeOrder'])->name('.complete.order');
    });

    Route::group(['prefix' => '/user-details', 'as' => '.user-details'], function () {
      Route::get('/admin-data', [UserDetailsController::class, 'getAdminDetails'])->name('.admin');
      Route::get('/user-data', [UserDetailsController::class, 'getUserDetails'])->name('.user');

      Route::put('/change/role', [UserDetailsController::class, 'changeRole'])->name('.change.role');
      Route::delete('/delete/user', [UserDetailsController::class, 'deleteUser'])->name('.delete.user');
    });


    Route::group(['prefix' => '/stories-management', 'as' => '.stories-management'], function () {
      Route::get('/', [StoriesManagementController::class, 'index']);
      Route::get('/add', [StoriesManagementController::class, 'addShow'])->name('.add.show');
      Route::post('/add/save', [StoriesManagementController::class, 'addSave'])->name('.add.save');

      Route::get('/edit/{id}', [StoriesManagementController::class, 'editShow'])->name('.edit.show');
      Route::post('/edit/save', [StoriesManagementController::class, 'editSave'])->name('.edit.save');

      Route::delete('/delete', [StoriesManagementController::class, 'deleteStory'])->name('.delete');
    });

    Route::group(['prefix' => '/contact-details', 'as' => '.contact-details'], function () {
      Route::get('/contact', [Admin_sideContactController::class, 'contactShow'])->name('.contact');
      Route::post('/contact/get-data', [Admin_sideContactController::class, 'getContactData'])->name('.get-data');
    });
  });
});

// Admin routes ends here



// Client Side Routes


Route::get('/', [HomeController::class, 'home'])->name('home');

Route::group(['prefix' => '/user', 'as' => 'user'], function () {

  Route::get('/about', [AboutController::class, 'about'])->name('.about');
  Route::get('/stories', [StoriesController::class, 'stories'])->name('.stories');

  // contact 
  Route::get('/contact', [ContactController::class, 'contact'])->name('.contact');
  Route::post('/contact/save', [ContactController::class, 'contactSave'])->name('.contact.save');
  Route::get('/login', [LoginController::class, 'login'])->name('.login');
  Route::post('/logincheck', [LoginController::class, 'logincheck'])->name('.login.check');
  Route::get('/registration', [RegistrationController::class, 'registration'])->name('.registration');
  Route::post('/regdatasave', [RegistrationController::class, 'regdatasave'])->name('.regdatasave');
  Route::get('/forget_password', [ForgetPasswordController::class, 'forget_password'])->name('.forget_password');

  // get story data
  Route::post('/get/story-data', [StoriesController::class, 'getModelData'])->name('.get.model-data');

  //user side
  Route::group(['middleware' => 'changePassword'], function () {
    Route::get('/changepassword', [LoginController::class, 'changepassword'])->name('.changepassword');
  });
  Route::get('/menu', [MenuController::class, 'menu'])->name('.menu');
  Route::get('/reservation', [ReservationController::class, 'reservation'])->name('.reservation');

  Route::group(['middleware' => ['Ulogin']], function () {

    Route::get('/Ulogout', [LoginController::class, 'Ulogout'])->name('.Ulogout');
    Route::post('/change/name', [LoginController::class, 'changeName'])->name('.change.name');

    Route::get('/order/{id}', [OrderController::class, 'order'])->name('.forder');
    Route::get('/yourorder', [OrderController::class, 'yourorder'])->name('.yourorder');
    Route::get('/vieworder/{id}', [OrderController::class, 'vieworder'])->name('.vieworder');
    Route::post('/change/cart/{id}', [OrderController::class, 'changeCart'])->name('.change.cart');

    Route::get('/confirm-order', [PlaceOrderController::class, 'confirmOrder'])->name('.confirm-order');
    Route::get('/delivery', [PlaceOrderController::class, 'delivery'])->name('.delivery');
    Route::get('/take-away', [PlaceOrderController::class, 'takeaway'])->name('.take-away');
    Route::get('/ontableorder', [PlaceOrderController::class, 'ontableorder'])->name('.ontableorder');

    Route::post('/save-order/{type}', [PlaceOrderController::class, 'saveOrder'])->name('.save-order');

    Route::get('/pchange_password', [ForgetPasswordController::class, 'pchange_password'])->name('.pchange_password');
    Route::post('/pcheckpassword', [ForgetPasswordController::class, 'pcheckpassword'])->name('.pcheckpassword');
    Route::post('/Usavechangepassword', [LoginController::class, 'Usavechangepassword'])->name('.Usavechangepassword');

    // Cart routes
    Route::post('/addtocart/{id}', [OrderController::class, 'addtocart'])->name('.addtocart');
    Route::get('/your-cart', [OrderController::class, 'yourCart'])->name('.your-cart');
    Route::delete('/remove/item/{id}', [OrderController::class, 'removeItem'])->name('.remove.item');
  });
});


// Socialite Routes

Route::get('/auth/google', [SocialiteController::class, 'redirect'])->name('auth.google');
Route::get('/auth/google/call-back', [SocialiteController::class, 'callback'])->name('auth.google.call-back');
Route::get('/auth/get-password', [SocialiteController::class, 'getPasswordShow'])->name('auth.get-password');
Route::post('/auth/save-password', [SocialiteController::class, 'savePasswordShow'])->name('auth.save-password');
