<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Coaches extends Authenticatable
{
  protected $fillable = [
       'name',
       'first_name',
       'email',
       'pseudo',
       'password',
   ];
  protected $table = 'coaches';
}
