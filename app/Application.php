<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = "applications";
    
    protected $fillable = [
        'img',
        'full_name', 
        'user_id', 
        'email',
        'phone_number',
        'password',
        'address',

    ];
    public $timestamps = false;

}
