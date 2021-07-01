<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
session_start();
class AuthController extends Controller
{
    
    public $currentuser;
   
    public function __construct()
    {
        $this->currentuser = "FU";
    }

    public function login(Request $request)
    {
        
        $user = User::where('username', $request->username)->first();

        if (!$user) {
            return response()->json(['status' => 'error', 'message' => 'User not found'], 404);
        }

        if (Hash::check($request->password, $user->password)){

            $token = Str::random(50);
            $user->update(['api_token'=>$token]);
            $this->currentuser = $request->username;
            $_SESSION['user'] = $request->username;

            
            return response()->json(['status' => 'success', 'user' => $user], 200);
        }

       return response()->json(['status' => 'error', 'message' => 'Invalid Credentials'], 401);

    }

    public function logout(Request $request)
    {
        
        // $api_token = $request->username;
        //echo  $_SESSION['user'];
        $user = User::where('username', $_SESSION['user'])->first();
        
        if (!$user) {
            return response()->json(['status' => 'error', 'message' => 'Not Logged in'], 401);
        }
        $api_token = "";
        $user->update(['api_token'=>$api_token]);
        
            return response()->json(['status' => 'Success', 'message' => 'You are now logged out'], 200);

    }
}