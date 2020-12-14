<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobileuser extends Model
{
    protected $table = "mobile_users";
    
    protected $fillable = [
        'img',
        'first_name', 
        'last_name', 
        'user_type', 
        'email',
        'phone_number',
        'password',
        'address',
        'store_id',

    ];
    public $timestamps = false;

}
