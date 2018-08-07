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
Route::get('/','LoginController@create')->name('contact.create');
Route::get('/dashboard-apprenant','dashboard@create')->name('dashboard.create');
Route::get('/dashboard-coach','dashboardCoach@create')->name('dashboardCoach.create');
Route::get('/register-coach','registerCoachController@create')->name('registerCoachController.create');
Route::get('/register','registerController@create')->name('registerController.create');
Route::get('/change-infos','changeInfosController@create')->name('changeInfosController.create');

Route::get('/css/exo1','cssExo1Controller@create')->name('cssExo1Controller.create');
Route::get('/css/exo2','cssExo2Controller@create')->name('cssExo2Controller.create');
Route::get('/js/exo1','jsExo1Controller@create')->name('jsExo1Controller.create');
Route::get('/js/exo2','jsExo2Controller@create')->name('jsExo2Controller.create');


Route::post('/','LoginController@store')->name('contact.store');
Route::post('/dashboard-apprenant','dashboard@store')->name('dashboard.store');
Route::post('/dashboard-coach','dashboardCoach@store')->name('dashboardCoach.store');
Route::post('/register-coach','registerCoachController@store')->name('registerCoachController.store');
Route::post('/register','registerController@store')->name('registerController.store');
Route::post('/change-infos','changeInfosController@store')->name('changeInfosController.store');

Route::post('/css/exo1','cssExo1Controller@store')->name('cssExo1Controller.store');
Route::post('/css/exo2',"cssExo2Controller@store")->name('cssExo2Controller.store');
Route::post('/js/exo1','jsExo1Controller@store')->name('jsExo1Controller.store');
Route::post('/js/exo2','jsExo2Controller@store')->name('jsExo2Controller.store');
