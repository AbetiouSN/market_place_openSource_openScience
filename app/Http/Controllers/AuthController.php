<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForgotPassword;
use App\Models\User;
use App\Models\Creator;
use App\Models\Searcher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Credentials do not match'
            ], 401);
        }

        $user = Auth::user();
        $token = $user->createToken('API token of ' . $user->username, ['access_level' => $user->type])->plainTextToken;
        set_time_limit(120);
        return response()->json([
            'user' => $user,
            'token' => $token,
            'access_level' => $user->type
        ], 200);
    }

    public function register(Request $request)
    {
        $user = User::create([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'type' => $request->input('type'),
        ]);

        $user_id = $user->id;
        $user_type = $user->type;

        // Create a new User of the app
        if ($user_type === "creator") {
            $creator = Creator::create([
                'CIN' => $request->input('CIN'),
                'F_Name' => $request->input('F_Name'),
                'L_Name' => $request->input('L_Name'),
                'date_Birth' => $request->input('date_Birth'),
                'Domain' => $request->input('Domain'),
                'id_user' => $user_id,
            ]);
            $creator->save();
        } else {
            $searcher = Searcher::create([
                'CIN' => $request->input('CIN'),
                'F_Name' => $request->input('F_Name'),
                'L_Name' => $request->input('L_Name'),
                'date_Birth' => $request->input('date_Birth'),
                'Domain' => $request->input('Domain'),
                'id_user' => $user_id,
            ]);
            $searcher->save();
        }

        $token = $user->createToken('API token of ' . $user->username)->plainTextToken;

        return response()->json([
            'user' => $user,
            'token' => $token,
        ], 200);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Logged out successfully']);
    }
}