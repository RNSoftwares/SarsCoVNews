<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function unauthorized() {
        return response()->json([
            'error' => 'Não Autorizado'
        ], 401);
    }
}
