<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index ()
    {
        $users = User::get();
        return response()->json(['message' => 'Data Tampil User Success', 'Data' => $users]);
    } 

    public function login(Request $req)
    {
        // Validate Inputs
        $rules = [
            'role' => 'required',
            'email' => 'required',
            'password' => 'required|string',
        ];
        $req->validate($rules);
        // find user email and role in users table
        $user = User::where('email', $req->email)->where('role', $req->role)->first();
        // if user email found and password is correct
        if($user && Hash::check($req->password, $user->password)){
            $token = $user->createToken('Personal Access Token')->plainTextToken;
            $response=['user'=> $user, 'token'=> $token];
            return response()->json($response, 200);
        }
        $response = ['message'=>'Incorrect role or email or password'];
        return response()->json($response, 400);
    }

    
}
