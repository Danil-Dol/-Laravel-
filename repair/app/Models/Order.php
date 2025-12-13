<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'email',
        'login',
        'password',
        'tel',
        'role',
    ];
}
