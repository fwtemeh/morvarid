<?php

namespace App\Services;

use Illuminate\Http\Request;

class Service
{

    public $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
}
