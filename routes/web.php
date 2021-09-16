<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerPaymentController;
use App\Http\Controllers\MonthlyController;
use App\Http\Controllers\SaveController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\TodayCostController;
use App\Models\Customer_payment;

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

Route::get('/', function () {
    return view('welcome');
});
//stock
Route::resource('/admin/Stock', StockController::class)->middleware('role:user');
//today_cost
Route::resource('/admin/today_cost', TodayCostController::class)->middleware('role:user');
//Customer
Route::resource('/admin/customer', CustomerController::class)->middleware('role:user');
//customer payment
Route::resource('/admin/customer_payment', CustomerPaymentController::class)->middleware('role:user');
//sell
Route::get('/admin/Sell', [SellController::class, 'view'])->name('admin.sell')->middleware('role:user');
Route::get('/admin/total_sell', [SellController::class, 'total_sell'])->name('admin.totel_sell')->middleware('role:user');
Route::resource('/admin/monthly', MonthlyController::class)->middleware('role:user');
//Route::get('/admin/invoice', [SaveController::class, 'invoice'])->middleware('role:user');