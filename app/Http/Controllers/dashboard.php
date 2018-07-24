<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class dashboard extends Controller
{
    public function create(){
      return view('dashboard-apprenant');
    }
    public function store(Request $request){

    }
}
