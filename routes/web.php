<?php

use Illuminate\Support\Facades\Route;


//Homepage Route
Route::get('/', 'App\Http\Controllers\ViewPagesController@homepage')->name('homepage');

//about-us Route
Route::get('/about-us', 'App\Http\Controllers\ViewPagesController@aboutUs')->name('aboutUs');

//portfolio Route
Route::get('/our-portfolio', 'App\Http\Controllers\ViewPagesController@portfolio')->name('ourPortfolio');

//blog Route
Route::get('/blog', 'App\Http\Controllers\ViewPagesController@blog')->name('blog');

//Contact-Us Route
Route::get('/contact-us', 'App\Http\Controllers\ViewPagesController@contactUs')->name('contactUs');

//Project Proposal Route
Route::get('/project-proposal', 'App\Http\Controllers\ViewPagesController@projectProposal')->name('projectProposal');

/// Route for Logout
Route::get('/logout', 'App\Http\Controllers\LogoutController@perform')->name('logout.perform');



//Dashbard Route with the role superadministrator
Route::group(['middleware'=>['auth','role:superadministrator']],function(){    
    Route::get('/technofirm/dashboard', 'App\Http\Controllers\ViewPagesController@dashboard')->name('superadministrator.dashboard');
     
    Route::get('/Banner/create', 'App\Http\Controllers\BannerController@create')->name('Banner.create');
    Route::put('/Banner/create', 'App\Http\Controllers\BannerController@store')->name('Banner.store');
    Route::get('/Banner/list', 'App\Http\Controllers\BannerController@list')->name('Banner.list');
    Route::get('/Banner/edit/{id}', 'App\Http\Controllers\BannerController@edit')->name('Banner.edit');
    Route::post('/Banner/update/{id}', 'App\Http\Controllers\BannerController@update')->name('Banner.update');
    Route::get('/Banner/delete/{id}', 'App\Http\Controllers\BannerController@destroy')->name('Banner.destroy');
    Route::get('/Banner/preview/{id}', 'App\Http\Controllers\BannerController@preview')->name('Banner.preview');
    Route::get('/Banner-status/update', 'App\Http\Controllers\BannerController@updateStatus')->name('BannerStatus');
    Route::get('/Banner/restoreList', 'App\Http\Controllers\BannerController@restoreList')->name('Banner.restoreList');
    Route::get('/Banner/destroyList/{id}', 'App\Http\Controllers\BannerController@restoreData')->name('Banner.restoreData');
    Route::get('/Banner-Permanently-Delete/{id}', 'App\Http\Controllers\BannerController@forceDelete')->name('Banner.forceDelete');


    Route::get('/Company-Details/create', 'App\Http\Controllers\CompanyDetailsController@create')->name('CompanyDetails.create');
    Route::put('/Company-Details/create', 'App\Http\Controllers\CompanyDetailsController@store')->name('CompanyDetails.store');
    Route::get('/Company-Details/list', 'App\Http\Controllers\CompanyDetailsController@list')->name('CompanyDetails.list');
    Route::get('/Company-Details/edit/{id}', 'App\Http\Controllers\CompanyDetailsController@edit')->name('CompanyDetails.edit');
    Route::post('/Company-Details/update/{id}', 'App\Http\Controllers\CompanyDetailsController@update')->name('CompanyDetails.update');
    Route::get('/Company-Details/delete/{id}', 'App\Http\Controllers\CompanyDetailsController@destroy')->name('CompanyDetails.destroy');
    Route::get('/Company-Details/preview/{id}', 'App\Http\Controllers\CompanyDetailsController@preview')->name('CompanyDetails.preview');
  
});


require __DIR__.'/auth.php';
