<?php

use App\Http\Controllers\Admin\UserFormController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('user/formSubmit', [UserController::class, 'formSubmit']);
Route::post('user/cardSubmit/{id}', [UserController::class, 'cardSubmit']);
Route::post('user/message/{id}',[UserController::class,'messages']);
Route::post('user/messases',[UserController::class,'messasesShow']);
