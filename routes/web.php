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

Route::post('/contact/submit', 'App\Http\Controllers\contactusController@store')->name('contactStore');

// Route for Logout
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

    Route::get('/Contact/list', 'App\Http\Controllers\contactusController@list')->name('Contact.list');
    Route::get('/Contact/delete/{id}', 'App\Http\Controllers\contactusController@destroy')->name('Contact.destroy');
    Route::get('/Contact/preview/{id}', 'App\Http\Controllers\contactusController@preview')->name('Contact.preview');
    Route::get('/Contact/restoreList', 'App\Http\Controllers\contactusController@restoreList')->name('Contact.restoreList');
    Route::get('/Contact/destroyList/{id}', 'App\Http\Controllers\contactusController@restoreData')->name('Contact.restoreData');
    Route::get('/Contact-Permanently-Delete/{id}', 'App\Http\Controllers\contactusController@forceDelete')->name('Contact.forceDelete');

    
    Route::get('/Ceo-details/create', 'App\Http\Controllers\CEODetailsController@create')->name('ceoDetails.create');
    Route::put('/Ceo-details/create', 'App\Http\Controllers\CEODetailsController@store')->name('ceoDetails.store');
    Route::get('/Ceo-details/list', 'App\Http\Controllers\CEODetailsController@list')->name('ceoDetails.list');
    Route::get('/Ceo-details/edit/{id}', 'App\Http\Controllers\CEODetailsController@edit')->name('ceoDetails.edit');
    Route::post('/Ceo-details/update/{id}', 'App\Http\Controllers\CEODetailsController@update')->name('ceoDetails.update');
    Route::get('/Ceo-details/delete/{id}', 'App\Http\Controllers\CEODetailsController@destroy')->name('ceoDetails.destroy');
    Route::get('/Ceo-details/preview/{id}', 'App\Http\Controllers\CEODetailsController@preview')->name('ceoDetails.preview');


    Route::get('/Our-Story/create', 'App\Http\Controllers\OurStoriesController@create')->name('ourStory.create');
    Route::put('/Our-Story/create', 'App\Http\Controllers\OurStoriesController@store')->name('ourStory.store');
    Route::get('/Our-Story/list', 'App\Http\Controllers\OurStoriesController@list')->name('ourStory.list');
    Route::get('/Our-Story/edit/{id}', 'App\Http\Controllers\OurStoriesController@edit')->name('ourStory.edit');
    Route::post('/Our-Story/update/{id}', 'App\Http\Controllers\OurStoriesController@update')->name('ourStory.update');
    Route::get('/Our-Story/delete/{id}', 'App\Http\Controllers\OurStoriesController@destroy')->name('ourStory.destroy');
    Route::get('/Our-Story/preview/{id}', 'App\Http\Controllers\OurStoriesController@preview')->name('ourStory.preview');



    Route::get('/brands/create', 'App\Http\Controllers\BrandsCollabWithController@create')->name('brands.create');
    Route::put('/brands/create', 'App\Http\Controllers\BrandsCollabWithController@store')->name('brands.store');
    Route::get('/brands/list', 'App\Http\Controllers\BrandsCollabWithController@list')->name('brands.list');
    Route::get('/brands/edit/{id}', 'App\Http\Controllers\BrandsCollabWithController@edit')->name('brands.edit');
    Route::post('/brands/update/{id}', 'App\Http\Controllers\BrandsCollabWithController@update')->name('brands.update');
    Route::get('/brands/delete/{id}', 'App\Http\Controllers\BrandsCollabWithController@destroy')->name('brands.destroy');
});

require __DIR__.'/auth.php';
