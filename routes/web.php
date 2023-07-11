<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\productRegisterController;
use App\Models\addproducts;
use App\Models\bidderregisters;
use App\Http\Controllers\sellerRegisterController;
use App\Http\Controllers\bidderRegisterController;
use App\Http\Controllers\sellerLoginController;
use App\Http\Controllers\bidderLoginController;
use App\Http\Controllers\bidderProcessController;
use App\Models\sellerregisters;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('form/{id}',[productRegisterController::class,'index']);
route::post('form-save',[productRegisterController::class,'save']);

route::get('mainproduct',[productRegisterController::class,'mainProducts']);
route::get('homepage',[productRegisterController::class,'homepage']);
route::get('goldProduct',[productRegisterController::class,'goldProduct']);
route::get('silverProduct',[productRegisterController::class,'silverProduct']);
route::get('diamondProduct',[productRegisterController::class,'diamondProduct']);
route::get('productDetails/{id}',[productRegisterController::class,'productDetails']);

// sellerRegister
route::get('sellerRegister',[sellerRegisterController::class,'index']);
route::post('sellerform-save',[sellerRegisterController::class,'save']);
route::get('sellerDashboard',[sellerRegisterController::class,'sellerDashboard']);

// bidderRegister
route::get('bidderRegister',[bidderRegisterController::class,'index']);
route::post('bidderform-save',[bidderRegisterController::class,'save']);

// bidderRegister
route::view('sellerLogin','/files/sellerLogin');
route::post('authenticate',[sellerLoginController::class,'authenticate']);


route::get('sellerStatus/{email}',[sellerLoginController::class,'sellerStatus']);

// bidderLogin
route::view('bidderLogin','/files/bidderLogin');
route::post('authenticatebidder',[bidderLoginController::class,'authenticate']);

// route::get('bidderGold/{id}',[bidderProcessController::class,'goldProduct1']);
// route::get('silverProduct/{id}',[bidderProcessController::class,'silverProduct1']);
// route::get('diamondProduct/{id}',[bidderProcessController::class,'diamondProduct1']);
// route::get('productDetails/{id}/{id}',[bidderProcessController::class,'productDetails1']);
