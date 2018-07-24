<?php
namespace App\Http\Controllers;
use DB;


use Illuminate\Http\Request;
use App\Http\Requests\LoginForm;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
  public function create()
  {

      return view('login');
  }
  public function store(Request $request)
   {
     $request->validate([
       "login_pseudo" => "required|string|max:255",
       "login_email" => "required|email|max:255",
       "login_password" => "required|string|max:255",
       "login_satus" => "required|string|max:255",

     ]);

     $login_infos=[];
     $login_infos['pseudo']=$request->input('login_pseudo');
     $login_infos['email']=$request->input('login_email');
     $login_infos['password']=$request->input('login_password');
     $login_infos['status']=$request->input('login_satus');
     $login_infos['key']=$request->input('login_key');

     $login_pseudo=filter_var($login_infos['pseudo'],FILTER_SANITIZE_STRING);
     $login_email=filter_var($login_infos['email'],FILTER_SANITIZE_EMAIL);
     $login_password=filter_var($login_infos['password'],FILTER_SANITIZE_STRING);
     $login_status=filter_var($login_infos['status'],FILTER_SANITIZE_STRING);
     $login_key=filter_var($login_infos['key'],FILTER_SANITIZE_STRING);

     $user_login_pseudo=DB::table('users')->where('pseudo',$login_pseudo)->value('pseudo');
     $user_login_email=DB::table('users')->where('pseudo',$login_pseudo)->value('email');
     $user_login_password=DB::table('users')->where('pseudo',$login_pseudo)->value('password');
     $user_login_badges=DB::table('users')->where('pseudo',$login_pseudo)->value('badges');

     if ( Hash::check($login_password,$user_login_password)==true && $user_login_pseudo==$login_pseudo && $user_login_email==$login_email && $login_status=='Apprenant') {
          $request->session()->put('datas',['pseudo'=>
          $user_login_pseudo,'badges'=>$user_login_badges,
          'email'=>$user_login_email]);
          $session=$request->session()->get('datas');
        return view('dashboard-apprenant')->with('pseudo',$session['pseudo'])->with('badges',$session['badges'])
        ->with('email',$session['email']);
      }
      elseif (Hash::check($login_password,$user_login_password)==true  && $login_key
        =="DontMissYourPlane!" && $login_status=='Coach') {

          $becodian_name=DB::table('users')->pluck('name');
          $becodian_firstname=DB::table('users')->pluck('first_name');
          $becodian_pseudo=DB::table('users')->pluck('pseudo');
          $becodian_email=DB::table('users')->pluck('email');
          $becodian_acheviement=DB::table('users')->pluck('badges');

          $request->session()->put('datas',['pseudo' => $user_login_pseudo,
            'email' => $user_login_email]);
            $session=$request->session()->get('datas');
            return view('dashboard-coach')->with('pseudo',$session['pseudo'])->with('email',$session['email'])
            ->with('becodian_name',$becodian_name);
     }
     else {
       echo "not connected";
     }


   }
}
