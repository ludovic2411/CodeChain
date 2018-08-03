<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  protected $fillable = [
       'name',
       'first_name',
       'email',
       'pseudo',
       'password',
       'badges'
   ];
   protected $table = 'users';
}
