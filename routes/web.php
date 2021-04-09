<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SalesController;

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


Auth::routes();

Route::get('/', [PagesController::class, "home"])->name('home');
Route::get('/sale/{id}', [PagesController::class, "sale"])->name('sale');
Route::get('/create', [PagesController::class, "createSale"])->name('create-sale');
Route::get('/sales', [PagesController::class, "mySales"])->name('my-sales');

Route::group(["middleware" => ["auth"]], function () {
    Route::post('/sales', [\App\Http\Controllers\SalesController::class, "store"])->name('store-sale');
    Route::post('/public-sale/{id}', [\App\Http\Controllers\SalesController::class, "publicSale"])->name('public-sale');
});


