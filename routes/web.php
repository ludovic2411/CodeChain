<?php

//require '../app/Http/Controllers/sanitizer.php';

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

Route::get('/register',function(){
  return view('register');
});

Route::get('/test',function(){
  return view('index-3columns');
});

Route::get('/','LoginController@create')->name('contact.create');

Route::get('/dashboard-apprenant','dashboard@create')->name('dashboard.create');

Route::get('/dashboard-coach','dashboardCoach@create')->name('dashboardCoach.create');

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

Route::post('/register',function(Request $request){
  $sanitizer= new Sanitizer();
  $datas=$request->validate([
    'name' => 'required|string|max:191',
    'first_name' => 'required|string|max:191',
    'email' => 'required|email',
    'pseudo' => 'required|string|max:191',
    'password' => 'required|string|max:191'
  ]);

  $name=$sanitizer->sanitize_string($datas['name']);
  $first_name=$sanitizer->sanitize_string($datas['first_name']);
  $email=$sanitizer->sanitize_email($datas['email']);
  $pseudo=$sanitizer->sanitize_string($datas['pseudo']);
  $password= $sanitizer->sanitize_string($datas['password']);
  $password=Hash::make($password);
  $badges=0;


  $user=new App\User;
  $user->name=$name;
  $user->first_name=$first_name;
  $user->email=$email;
  $user->pseudo=$pseudo;
  $user->password=$password;
  $user->badges=$badges;


  $user->save();
  return redirect('./');
});

Route::post('/','LoginController@store')->name('contact.store');

Route::post('/dashboard-apprenant','dashboard@store')->name('dashboard.store');

Route::post('/dashboard-coach','dashboardCoach@store')->name('dashboardCoach.store');