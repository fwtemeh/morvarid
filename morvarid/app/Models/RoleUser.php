<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
     /*------------ Variables ------------*/

     protected $fillable = [
        'role_id',
        'user_id',
    ];

    /*------------ Relations ------------*/

    /*-------------- Scopes -------------*/

    /*---------- Other Functions --------*/
}
