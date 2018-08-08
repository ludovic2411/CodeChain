<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use Notifiable;
  protected $fillable = [
       'name',
       'first_name',
       'email',
       'pseudo',
       'password',
       'badges'
   ];
   protected $table = 'users';
   public function routeNotificationForMail($notification)
    {
        return $this->email_address;
    }
}
