<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

    /**
     * Update Password
     * @param Request request
     * @return Illuminate\Http\JsonResponse
     */
    public function updatePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'current_password' => ['required', 'string'],
            'password' => ['required', 'string', 'confirmed']
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toArray(), 400);
        }
        $validator = $validator->validate();
        $user = User::query()->find(auth()->id());
        if (!Hash::check($validator['current_password'], $user->password))
            return response()->json(['Contraseña Incorrecta'], 400, [], JSON_NUMERIC_CHECK);
        $user->password = bcrypt($validator['password']);
        $user->tokens()->delete();
        return $user->save() ? response()->json($user, 200, [], JSON_NUMERIC_CHECK) : response()->json(null, 502);
    }
}
