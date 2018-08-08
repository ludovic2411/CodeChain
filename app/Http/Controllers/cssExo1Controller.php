<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class cssExo1Controller extends Controller
{
    public function create(Request $request){
      if($request->session()->has('email')){
        $email= $request->session()->get('email');
        echo $email;
      }else{
        echo "pok";
      }
      return view('css-background-color');
    }
    public function store(Request $request){
      $email= $request->session()->get('email');
      $badges=DB::table('users')->where('email',$email)->value('badges');
      $badges=$badges+1;
      DB::table('users')->where('email',$email)->update(['badges'=>$badges]);
      $url='http://becodecademy.test/css/exo2';
      DB::table('users')->where('email',$email)->update(['last_page'=>$url]);
      return redirect('/css/exo2');
    }
}
