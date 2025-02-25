<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailVerificationTokens extends Model
{
    protected $fillable=[
        
    'email',
    'token' , 
    'code'
    ];
}
