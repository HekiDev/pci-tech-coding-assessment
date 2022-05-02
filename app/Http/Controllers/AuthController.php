<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    //Register
    public function register(Request $request){
        $fields = $request->validate([
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|'
        ]);

        $user = User::create([
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);

        $response = [
            'message' => 'User successfully registered.',
        ];

        return response($response, 201);
    }

    //Login
    public function login(Request $request){
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        //check email if exist
        $user = User::where('email', $fields['email'])->first();

        //check password if not matched
        if(!$user || !Hash::check($fields['password'], $user->password)){
            return response([
                'message' => 'Invalid credentials.'
            ], 401);
        }

        //Access Token 
        $token = $user->createToken('pci-token')->plainTextToken;

        $response = [
            'message' => 'Login success.',
            'Access token' => $token
        ];

        return response($response, 201);
    }

    //Logout
    public function logout(Request $request){
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logged Out'
        ];
    }
}
