<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PermissionUser extends Model
{
    /*------------ Variables ------------*/

    protected $fillable = [
        'permission_id',
        'user_id',
    ];

    /*------------ Relations ------------*/

    /*-------------- Scopes -------------*/

    /*---------- Other Functions --------*/
}
