<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserContoller extends Controller
{
    public function register(Request $request)
    {
        $incomingFields = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        User::create($incomingFields);
        return 'Your account has been created';
    }
}
