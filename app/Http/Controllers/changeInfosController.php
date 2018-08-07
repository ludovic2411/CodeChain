<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class changeInfosController extends Controller
{
    public function create(){
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
    }
}
