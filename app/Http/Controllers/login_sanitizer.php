<?php
class Ludo_sanitizer{
  public function sanitize_string($string){
    return filter_var($string,FILTER_SANITIZE_STRING);
  }
  public function sanitize_email($email){
    return filter_var($email,FILTER_SANITIZE_EMAIL);
  }
}
 ?>
