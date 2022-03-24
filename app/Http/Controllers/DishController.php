<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DishController extends Controller
{
    /**
     * Create
     * @param Request request
     * @return Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category' => ['required', 'string'],
            'name' => ['required', 'string'],
            'description' => ['nullable', 'string'],
            'sell_price' => ['required', 'numeric'],
            'feature' => ['nullable', 'boolean'],
            'image' => ['required', 'image'],
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toArray(), 400);
        }
        $validator = $validator->validate();
        $validator['image'] = $request->file('image')->store('dishes');
        $dish = new Dish($validator);
        return $dish->save()
            ? response()->json($dish, 200, [], JSON_NUMERIC_CHECK)
            : response()->json(['Error'], 502, [], JSON_NUMERIC_CHECK);
    }
    /**
     * Find
     * @return Illuminate\Http\JsonResponse
     */
    public function find(int $id)
    {
        $dish = Dish::find($id);
        return $dish ? response()->json($dish, 200, [], JSON_NUMERIC_CHECK) : response()->json(null, 400);
    }
    /**
     * List
     * @param Request request
     * @return Illuminate\Http\JsonResponse
     */
    public function list(Request $request)
    {
        return Dish::all();
    }

    /**
     * Renove
     * @param int $id
     * @return Illuminate\Http\JsonResponse
     */
    public function remove(int $id)
    {
        $dish = Dish::find($id);
        if (!$dish) return response()->json(null, 400);
        if (Storage::exists($dish->image)) Storage::delete($dish->image);
        return response()->json($dish->delete());
    }

    /**
     * Update
     * @param Request request
     * @return Illuminate\Http\JsonResponse
     */
    public function update(int $id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category' => ['nullable', 'string'],
            'name' => ['nullable', 'string'],
            'description' => ['nullable', 'string'],
            'sell_price' => ['nullable', 'numeric'],
            'feature' => ['nullable', 'boolean'],
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toArray(), 400);
        }
        $validator = $validator->validate();
        $dish = Dish::find($id);
        if (!$dish) return response()->json(['No encontrado'], 400);
        return $dish->update($validator)
            ? response()->json($dish, 200, [], JSON_NUMERIC_CHECK)
            : response()->json(['Error'], 502, [], JSON_NUMERIC_CHECK);
    }
}
