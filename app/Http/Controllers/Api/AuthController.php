<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email|string',
            'password' => 'required'
        ]);

        try {
            if (!Auth::attempt($request->only('email', 'password'))) {
                return [
                    'error' => true,
                    'message' => 'User Not Found!'
                ];
            }

            $token = auth()->user()->createToken('authToken')->accessToken;


            return [
                'error' => false,
                'message' => 'Login Successfull',
                'user' => auth()->user(),
                'token' => $token
            ];
        } catch (\Throwable $th) {
            return [
                'error' => true,
                'message' => 'Something wrong!'
            ];
        }
    }
}
