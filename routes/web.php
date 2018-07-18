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

Route::get('/css/background-color', function () {
    return view('css-background-color');
});
Route::get('/css/grid',function(){
  return view('css-grid');
});
Route::get('/',function(){
  return view('register');
});

use Illuminate\Http\Request;
// Route::post('/',function(Request $request){
//
// });
