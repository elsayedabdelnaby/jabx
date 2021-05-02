<?php

/**
 * Admin routes
 */

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    Route::prefix('admin')->name('admin.')->middleware('auth:admin')->group(function () {
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::get('/login', 'LoginController@showLoginForm')->withoutMiddleware('auth:admin')->name('show.login');
        Route::post('/login', 'LoginController@login')->withoutMiddleware('auth:admin')->name('login');
        Route::resource('users', 'AdminUserController')->name('', 'users');
        Route::post('users/{user}/changepassword', 'AdminUserController@changePassword')->name('users.changepassword');
        Route::resource('/roles', 'RoleController')->name('', 'roles');
        Route::get('/sitesettings/{id}', 'SiteSettingsController@edit')->name('sitesettings.edit');
        Route::put('/sitesettings/{id}', 'SiteSettingsController@update')->name('sitesettings.update');
        Route::resource('sponsors', 'SponsorController')->name('', 'sponsors');
        Route::resource('sliders', 'SliderController')->name('', 'sliders');
        Route::get('/contactusdata/{id}', 'ContactUsDataController@edit')->name('contactusdata.edit');
        Route::put('/contactusdata/{id}', 'ContactUsDataController@update')->name('contactusdata.update');
    });
});
