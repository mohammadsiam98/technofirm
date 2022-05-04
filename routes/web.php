<?php

use Illuminate\Support\Facades\Route;


//Homepage Route
Route::get('/', 'App\Http\Controllers\ViewPagesController@homepage')->name('homepage');
//Homepage Route


//about-us Route
Route::get('/about-us', 'App\Http\Controllers\ViewPagesController@aboutUs')->name('aboutUs');
//about-us Route

//portfolio Route
Route::get('/our-portfolio', 'App\Http\Controllers\ViewPagesController@portfolio')->name('ourPortfolio');
//portfolio Route

//blog Route
Route::get('/blog', 'App\Http\Controllers\ViewPagesController@blog')->name('blog');
//blog Route

//Contact-Us Route
Route::get('/contact-us', 'App\Http\Controllers\ViewPagesController@contactUs')->name('contactUs');
//Contact-Us Route

//Project Proposal Route
Route::get('/project-proposal', 'App\Http\Controllers\ViewPagesController@projectProposal')->name('projectProposal');
//Project Proposal Route
Route::get('/logout', 'App\Http\Controllers\LogoutController@perform')->name('logout.perform');
//Dashbard Route with the role superadministrator
Route::group(['middleware'=>['auth','role:superadministrator']],function(){    
    Route::get('/technofirm/dashboard', 'App\Http\Controllers\ViewPagesController@dashboard')->name('superadministrator.dashboard');
     // Route for Logout
});


require __DIR__.'/auth.php';
