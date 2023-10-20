<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserFormController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\Website\ContactUsController;
use App\Http\Controllers\Website\TeamController;
use App\Http\Controllers\Website\TestimonialController;
use App\Http\Controllers\Website\WebsiteController;
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
Route::group(['middleware' => 'AuthUser'], function () {
    Route::get('admin/dashboard', [DashboardController::class, 'index']);

    Route::get('admin/contact-us', [ContactUsController::class, 'contactGet']);
    Route::get('admin/contact/delete/{id}', [ContactUsController::class, 'contactDelete']);


    #testimonial
    Route::get('admin/testimonial', [TestimonialController::class, 'index']);
    Route::post('admin/testimonial/store', [TestimonialController::class, 'store']);
    Route::get('admin/testimonial/delete/{id}', [TestimonialController::class, 'delete']);


    #Our Team
    Route::get('admin/team', [TeamController::class, 'index']);
    Route::post('admin/team/store', [TeamController::class, 'store']);
    Route::get('admin/team/delete/{id}', [TeamController::class, 'delete']);
});

# Basic Routes
Route::get('/', [WebsiteController::class, 'index']);
Route::get('/contact', [WebsiteController::class, 'contact']);
Route::get('/about', [WebsiteController::class, 'about']);
Route::get('/service', [WebsiteController::class, 'service']);
// Route::get('/career',function(){return view('career');});
Route::get('/career', [WebsiteController::class, 'career']);
Route::get('/policy', [WebsiteController::class, 'policy']);
Route::get('/life', [WebsiteController::class, 'life']);

# Contact Us
Route::post('contact_us', [ContactUsController::class, 'store']);


# For Admin
Route::get('/admin/login', [AdminLoginController::class, 'login']);
Route::post('admin-login-check', [AdminLoginController::class, "loginAuth"]);
Route::get('logout', [AdminLoginController::class, "logout"]);
Route::get('cache/{id}', function ($id) {
    \Artisan::call($id);

    dd($id . " Run Succesfully!");
});
