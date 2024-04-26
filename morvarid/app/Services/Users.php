<?php

namespace App\Services;

use App\Models\User;

class Users extends Service
{
    public function all()
    {
        return User::all();
    }
}