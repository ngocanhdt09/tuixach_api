<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function login(Request $request)
    {
        // $credentials = $request->only('email', 'password');
        
        // if (Auth::attempt($credentials)) {
        //     $user = Auth::user();
        //     $token = $user->createToken('MyApp')->plainTextToken;
        //     return response()->json(['token' => $token]);
        // }
    
        // return response()->json(['error' => 'Unauthorized'], 401);
        return response()->json('hello word');
    }
}
