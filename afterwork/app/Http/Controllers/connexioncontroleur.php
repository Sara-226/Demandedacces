<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class connexioncontroleur extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('emai', 'role', 'password');
    }
}
