<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ConfigController extends Controller
{
    /**
     * currentConfig
     * @return Illuminate\Http\JsonResponse
     */
    public function current()
    {
        return Config::first();
    }

    /**
     * Update
     * @param Request request
     * @return Illuminate\Http\JsonResponse
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // home
            'title' => ['nullable', 'string'],
            'home_subtitle' => ['nullable', 'string'],
            // about
            'about_us' => ['nullable', 'string'],
            // Menu
            'menu_subtitle' => ['nullable', 'string'],
            // Events
            'events_subtitle' => ['nullable', 'string'],
            // Reserv
            'reserv_subtitle' => ['nullable', 'string'],
            // Contact
            'address' => ['nullable', 'string'],
            'phone' => ['nullable', 'string'],
            'email' => ['nullable', 'email'],
            'open' => ['nullable', 'boolean'],
            // Social
            'social_fb' => ['nullable', 'string'],
            'social_in' => ['nullable', 'string'],
            'social_yt' => ['nullable', 'string'],
            'social_tw' => ['nullable', 'string'],
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toArray(), 400);
        }
        $validator = $validator->validate();
        $config = Config::first();
        return $config->update($validator) ? response()->json($config) : response()->json(['No se pudo actualizar la configuracion'], 502);
    }
}
