<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardCoach extends Controller
{
    public function create(){
      return view('dashboard-coach');
    }
}
