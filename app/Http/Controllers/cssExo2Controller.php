<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class cssExo2Controller extends Controller
{
    public function create(Request $request){
      if($request->session()->has('email')){
        $email=$request->session()->get('email');
        echo $email;
      }else{
        echo "pok";
      }
      return view('css-grid');
    }
    public function store(Request $request){
        $email=$request->session()->get('email');
        $badges=DB::table('users')->where('email',$email)->value('badges');
        $badges=$badges+1;
        DB::table('users')->where('email',$email)->update(['badges'=>$badges]);
        $url='http://becodecademy.test/js/exo1';
        DB::table('users')->where('email',$request->session()->get('email'))->update(['last_page'=>$url]);
       return redirect('js/exo1');
    }
}
