<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class jsExo2Controller extends Controller
{
    public function create(Request $request){
      return view('js-exo2');
    }
    public function store (Request $request){
      $email=$request->session()->get('email');
      $badges=DB::table('users')->where('email',$email)->value('badges');
      $badges=$badges+1;
      DB::table('users')->where('email',$email)->update(['badges'=>$badges]);
      echo "wow";
    }
}
