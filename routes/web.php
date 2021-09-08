<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SellController;
use App\Http\Controllers\StockController;

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
Route::resource('/admin/Stock', StockController::class)->middleware('role:user');
// Route::resource('/admin/store', StockController::class,);
Route::get('/admin/Sell', [SellController::class, 'view'])->name('admin.sell')->middleware('role:user');
// Route::get('/admin/store', [Controller::class, ])->middleware('role:editor');