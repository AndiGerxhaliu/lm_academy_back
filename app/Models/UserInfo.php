<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
   

   protected $fillable = [
    'user_id',
    'adress',
    'tel',
    'about'
   ];
}
