<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // public function register(Request $request)
    // {
    //     $user = User::create([
    //         'username'  => $request->username,
    //         'password'  => app('hash')->make($request->password),
    //         'api_token' => Str::random(50),
    //     ]);

    //     return response()->json(['status' => 'success', 'user' => $user], 200);
    // }

    public function login(Request $request)
    {
        $user = User::where('username', $request->username)->first();

        if (!$user) {
            return response()->json(['status' => 'error', 'message' => 'User not found'], 404);
        }

        if (Hash::check($request->password, $user->password)){

                $user->update(['api_token'=>Str::random(50)]);
                return response()->json(['status' => 'success', 'user' => $user], 200);
        }

       return response()->json(['status' => 'error', 'message' => 'Invalid Credentials'], 401);

    }

    public function logout(Request $request)
    {
        $api_token = $request->api_token;

        $user = User::where('api_token', $api_token)->first();

        if (!$user) {
            return response()->json(['status' => 'error', 'message' => 'Not Logged in'], 401);
        }
        $user->api_token = null;

        $user->save();

            return response()->json(['status' => 'Success', 'message' => 'You are now logged out'], 200);

    }
}