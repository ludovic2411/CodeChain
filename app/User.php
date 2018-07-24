<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  protected $fillable = [
       'name',
       'first_name',
       'email',
       'pseudo',
       'password',
       'badges'
   ];
}
