<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Users extends \Eloquent implements Authenticatable
{
  use AuthenticableTrait;
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password', 'remember_token' , 'created_at', 'updated_at'];
}
