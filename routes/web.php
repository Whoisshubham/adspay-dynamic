<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserFormController;
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

Route::get('user/datalist',[DashboardController::class,'index']);
Route::get('user/list',[UserFormController::class,'index']);
Route::Post('user/formSubmit',[UserFormController::class,'formSubmit']);
Route::get('user/card/{id}',[UserFormController::class,'card']);
Route::get('user/show-card/{id}',[UserFormController::class,'showCardDetails']);
Route::Post('user/formSubmit/{id}',[UserFormController::class,'cardSubmit']);
Route::get('user/data-list/delete/{id}',[UserFormController::class,'delete']);

Route::get('/', [WebsiteController::class, 'index']);
Route::get('/one/{title}', [WebsiteController::class, 'applyCard']);
