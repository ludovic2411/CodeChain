<?php

//require '../app/Http/Controllers/sanitizer.php';
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
//require 'vendor/autoload.php';
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

Route::get('/css/background-color', function () {
    return view('css-background-color');
});
Route::get('/css/grid',function(){
  return view('css-grid');
});


Route::get('/','LoginController@create')->name('contact.create');
Route::get('/dashboard-apprenant','dashboard@create')->name('dashboard.create');
Route::get('/dashboard-coach','dashboardCoach@create')->name('dashboardCoach.create');
Route::get('/register-coach','registerCoachController@create')->name('registerCoachController.create');
Route::get('/register','registerController@create')->name('registerController.create');


Route::post('/','LoginController@store')->name('contact.store');
Route::post('/dashboard-apprenant','dashboard@store')->name('dashboard.store');
Route::post('/dashboard-coach','dashboardCoach@store')->name('dashboardCoach.store');
Route::post('/register-coach','registerCoachController@store')->name('registerCoachController.store');
Route::post('/register','registerController@store')->name('registerController.store');
