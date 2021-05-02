<?php

use App\Http\Middleware\FrontEndPages;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();




Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', FrontEndPages::class]
], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/products/{slug}', 'ProductController@show')->name('product');
});



/**
 * Compiled views cleared!
 * Application cache cleared!
 * Route cache cleared!
 * Configuration cache cleared!
 * Compiled services and packages files removed!
 * Caches cleared successfully!
 */
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('optimize:clear');
    return '<h1>Cache facade value cleared</h1>';
});
