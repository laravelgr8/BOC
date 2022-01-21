<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/',[UserController::class,'login'])->name('login');
Route::post('/',[UserController::class,'login_check'])->name('login.check');
Route::get('/print-form',[UserController::class,'index'])->name('index');
Route::get('getDistrict',[UserController::class,'getDistrict'])->name('getDistrict');
Route::post('/owner_insert',[UserController::class,'owner_insert'])->name('owner_insert');
Route::post('/vendorInsert',[UserController::class,'vendorInsert'])->name('vendorInsert');
