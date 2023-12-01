<?php

namespace App\Http\Controllers;

use Laravel\Passport\Http\Controllers\AccessTokenController;
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends AccessTokenController
{
    

    public function me()
    {
        return response()->json(auth('api')->user());
    }

}
