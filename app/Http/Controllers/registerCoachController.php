<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Coaches;
use PHPMailer\PHPMailer\PHPMailer;
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require '../vendor/autoload.php';

class registerCoachController extends Controller
{
    public function create(){
      return view('register-coach');
    }
    public function store(Request $request){
      $datas=$request->validate([
        'name' => 'required|string|max:191',
        'first_name' => 'required|string|max:191',
        'email' => 'required|email',
        'pseudo' => 'required|string|max:191',
        'password' => 'required|string|max:191',
        'key' => 'required|string|max:191',
      ]);
      $coach_name=filter_var($datas['name'],FILTER_SANITIZE_STRING);
      $coach_first_name=filter_var($datas['first_name'],FILTER_SANITIZE_STRING);
      $coach_email=filter_var($datas['email'],FILTER_SANITIZE_EMAIL);
      $coach_pseudo=filter_var($datas['pseudo'],FILTER_SANITIZE_STRING);
      $coach_password=filter_var($datas['password'],FILTER_SANITIZE_STRING);
      $coach_password=Hash::make($coach_password);
      $coach_key=filter_var($datas['key'],FILTER_SANITIZE_STRING);

      if($coach_key=='DontMissYourTrain!'){
        $coach=new Coaches;
        $coach->name=$coach_name;
        $coach->first_name=$coach_first_name;
        $coach->email=$coach_email;
        $coach->pseudo=$coach_pseudo;
        $coach->password=$coach_password;
        $coach->save();

        $mail = new PHPMailer;

      //Server settings
      $mail->SMTPDebug = 2;                                 // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.mailtrap.io';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = '278aa4d0e2e4df';                 // SMTP username
      $mail->Password = '71be3ad9f0b89a';                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 25;                                    // TCP port to connect to

      //Recipients
      $mail->setFrom('BeCode@BeCode.org', 'Mailer');
      $mail->addAddress(' f4c41f6920-92df21@inbox.mailtrap.io', ' Nouvel apprenant');     // Add a recipient
      $mail->addAddress(' f4c41f6920-92df21@inbox.mailtrap.io');               // Name is optional
      $mail->addReplyTo('info@example.com', 'Registration');
      $mail->addCC('cc@example.com');
      $mail->addBCC('bcc@example.com');

      //Attachments
      //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

      //Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Ton inscription est confirmee!';
      $mail->Body    = '<b>Bienvenue cher coach</b>
                        <p>Voici les infos que tu nous a envoyees</p>
                        <ul>
                          <li>Nom:"'.$coach_name.'"</li>
                          <li>Prenom:"'.$coach_first_name.'"</li>
                          <li>Email:"'.$coach_email.'"</li>
                          <li>Pseudo:"'.$coach_pseudo.'"</li>
                          </ul>
                            <p>La cle supplementaire pour les coaches est: DontMissYourTrain!</p>
                            <a href="http://becodecademy.test/">connecte toi</a> pour gerer
                            les profils des apprenants et observer leurs progres!';
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
      $mail->send();
      echo 'Message has been sent';
  if(!$mail->send()) {
      echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
  }
        return redirect('/register-coach');
      }else{
        echo "wrong key";
      }

    }
}
