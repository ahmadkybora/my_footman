<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     *
     */
    protected $fillable=[
        'first_name',
        'last_name',
        'username',
        'email',
        'mobile',
        'home_phone',
        'sex',
        'birth',
        'about_me',
        'address_home',
        'password'
    ];

    /**
     *
     */
    protected $table='employees';
}
