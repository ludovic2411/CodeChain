<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;


$becodian_name=DB::table('users')->pluck('name');
$becodian_firstname=DB::table('users')->pluck('first_name');
$becodian_pseudo=DB::table('users')->pluck('pseudo');
$becodian_email=DB::table('users')->pluck('email');
$becodian_acheviement=DB::table('users')->pluck('badges');
echo $becodian_name;
echo $becodian_firstname;
echo $becodian_pseudo;
echo $becodian_email;
echo $becodian_acheviement;

class dashboardCoach extends Controller
{
  public function get(){



  }
}
