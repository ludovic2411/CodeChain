<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Notifications\updateInfos;
use Illuminate\Support\Facades\Notification;

class changeInfosController extends Controller
{
    public function create(Request $request){
      if($request->session()->has('email')){
        echo $request->session()->get('email');
      }else{echo "pok";}
      return view('change-infos');
    }
    public function store(Request $request){
      $datas=$request->validate([
        'current_pseudo' => 'string|max:255|nullable',
        'new_pseudo' => 'string|max:255|nullable',
        'current_email' => 'email|max:255|nullable',
        'new_email' => 'email|max:255|nullable',
        'current_password' => 'string|max:255|nullable',
        'new_password' => 'string|max:255|nullable',
      ]);
      $current_pseudo=filter_var($datas['current_pseudo'],FILTER_SANITIZE_STRING);
      $new_pseudo=filter_var($datas['new_pseudo'],FILTER_SANITIZE_STRING);
      $current_email=filter_var($datas['current_email'],FILTER_SANITIZE_EMAIL);
      $new_email=filter_var($datas['new_email'],FILTER_SANITIZE_EMAIL);
      $current_password=filter_var($datas['current_password'],FILTER_SANITIZE_STRING);
      $new_password=filter_var($datas['new_password'],FILTER_SANITIZE_STRING);

      $pseudo=DB::table('users')->where('email',$request->session()->get('email'))->value('pseudo');
      $email=DB::table('users')->where('email',$request->session()->get('email'))->value('email');
      $password=DB::table('users')->where('email',$request->session()->get('email'))->value('password');


      if($current_pseudo==$pseudo){
        DB::table('users')->where('email',$request->session()->get('email'))->update(['pseudo'=>$new_pseudo]);
        echo "pseudo updated";
        Notification::route('mail', 'f4c41f6920-92df21@inbox.mailtrap.io')->notify(new updateInfos("The BeCode staff"));

      }else{echo "The pseudo you have typed doesn't match your current registered pseudo";}
      if ($current_email==$email) {
          DB::table('users')->where('email',$request->session()->get('email'))->update(['email'=>$new_email]);
          Notification::route('mail', 'f4c41f6920-92df21@inbox.mailtrap.io')->notify(new updateInfos("The BeCode staff"));
          echo 'email adress updated';
      }else {
        echo "The email adress you have typed doesn't match your current registered email adress";
      }
      if(Hash::check($current_password,$password)==true){
          $new_password=Hash::make($new_password);
          DB::table('users')->where('email',$request->session()->get('email'))->update(['password'=>$new_password]);
          Notification::route('mail', 'f4c41f6920-92df21@inbox.mailtrap.io')->notify(new updateInfos("The BeCode staff"));
          echo "password updated succesfully";
      }else {
        echo "The password you have typed doesn't match your current registered password";
      }
    }
}
