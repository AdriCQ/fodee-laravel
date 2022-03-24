<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * login
     * @param Request request
     * @return Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email'],
            'password' => ['required', 'string']
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toArray(), 400);
        }
        $validator = $validator->validate();
        if (!Auth::attempt($validator)) return \response()->json(['Credenciales incorrectas'], 401);
        $user = Auth::user();
        return response()->json([
            'profile' => $user,
            'api_token' => $user->createToken('auth-token')->plainTextToken
        ], 200, [], JSON_NUMERIC_CHECK);
    }
}
