<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class dashboard extends Controller
{
    public function create(Request $request){
      if ($request->session()->has('email')) {
        $email=$request->session()->get('email');
        $pseudo=$request->session()->get('pseudo');
        $badges=DB::table('users')->where('pseudo',$pseudo)->value('badges');
      }else{
        echo "pok";
      }
      return view('dashboard-apprenant')->with('email',$email)->with('pseudo',$pseudo)->with('badges',$badges);
    }
    public function store(Request $request){
      return redirect('/css/exo1');
    }
}
