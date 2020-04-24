<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PortfolioController@index')->name('portfolio.index');
Route::get('/portfolio', 'PortfolioController@portfolio')->name('portfolio.portfolio');
Route::get('/portfolio/{slug}', 'PortfolioController@portfolio_single')->name('portfolio.portfolio_single');
Route::get('/feedback/{name}', 'PortfolioController@feedback')->name('portfolio.feedback');
Route::get('/contact', 'PortfolioController@contact')->name('portfolio.contact');
Route::get('/about', 'PortfolioController@about')->name('portfolio.about');

Route::get('/test', 'PortfolioController@test');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
