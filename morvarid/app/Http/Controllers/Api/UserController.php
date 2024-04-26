<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $users;

    public function __construct(Users $users)
    {
        $this->users = $users;
    }

    public function allUsers()
    {
        $results = $this->users->all();
        return _json($results, 200);
    }
}
