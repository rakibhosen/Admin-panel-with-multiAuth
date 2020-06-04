<?php

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

Route::get('/', function() {
    return view('welcome');
});

Route::get('/admin/dashboard','Backend\AdminController@index')->name('admin.dashboard');

Route::get('/admin','Auth\admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Auth\admin\LoginController@login');
Route::post('admin/logout','Auth\admin\LoginController@logout')->name('admin.logout');

Route::post('/admin/password/email','Auth\admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('/admin/password/reset','Auth\admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/admin/password/reset','Auth\admin\ResetPasswordController@reset')->name('admin.password.update');
Route::get('/admin/password/reset/{token} ','Auth\admin\ResetPasswordController@showResetForm')->name('admin.password.reset');






// Route::get('/admin','Backend\AdminController@index')->name('admin.login');
// Route::post('/logout','Backend\AdminController@logout')->name('admin.logout');
// Route::post('/checkAdmin','Backend\AdminController@check_admin')->name('admin.check');


// Route::group(['middleware' =>'auth:admin'], function(){
// // =====Admin Route============================================//
// // Route::group(['prefix'=>'/'], function(){

//     // =======Admin login dashboard logout controller start===================
//         Route::get('/dashboard','Backend\PagesController@show_dashboard')->name('admin.dashboard');

//     // =======Admin login dashboard logout controller start===================

// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
