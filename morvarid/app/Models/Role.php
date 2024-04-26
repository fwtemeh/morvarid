<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    /*------------ Variables ------------*/

    protected $fillable = [
        'name_fa',
        'name_en',
        'status'
    ];

    /*------------ Relations ------------*/

    /*-------------- Scopes -------------*/

    /*---------- Other Functions --------*/
}
