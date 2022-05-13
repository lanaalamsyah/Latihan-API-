<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facedes\Auth;
use Illuminate\Support\Facedes\Hash;
use Illuminate\Support\Facedes\Validator;


class ApiController extends Controller
{
    public function login()
    {
      $rules = [
          'email' =>'required',
          'password' =>'required|string'
      ];
      $req->validate($rules);

      //find user email in users table

        $user = User::where('email', $req->email)->first();
        if($user && Hash::check($req->password, $user->password)){

            $token = $user->createToken('Personal Access Token')->plainTextToken;
            $response = ['user'=> $user, 'token'=>$token];
            return response()->json($response, 200);
          }
          $respnse = ['message'=>'Incorrect email or password'];
          return response()->jsm($respnse, 400);
        }
}