<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\WelcomeController;

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
Route::resource('/',WelcomeController::class);



Auth::routes();

Route::get('/search', [PagesController::class, 'search']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

});
Route::resource('search',SearchController::class);
Route::resource('articles',ArticleController::class);
Route::resource('booking',BookingController::class);




