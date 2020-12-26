<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterUser extends Model
{
    protected $fillable =

        ['email',
            'password',
            'mobile',
            'fullname',
        ];

    protected $primaryKey = 'userid';
}
