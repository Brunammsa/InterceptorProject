<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginTokenController extends Controller
{
    public function getToken(Request $request)
    {
        $credenciais = $request->only(['email', 'password']);
        if (!Auth::attempt($credenciais)) {
            return response()->json('Unauthorized', 401);
        }
    
        $user = Auth::user();
        $user->tokens()->delete();
        $token = $user->createToken('token');
        
        return response()->json($token->plainTextToken);
    }
}
