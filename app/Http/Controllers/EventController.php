<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    /**
     * Create
     * @param Request request
     * @return Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'string'],
            'date' => ['required', 'string'],
            'description' => ['required', 'string'],
            'enable' => ['required', 'boolean'],
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toArray(), 400);
        }
        $validator = $validator->validate();
        $event = new Event($validator);
        return $event->save()
            ? response()->json($event, 200, [], JSON_NUMERIC_CHECK)
            : response()->json(['Error'], 502, [], JSON_NUMERIC_CHECK);
    }

    /**
     * Find
     * @return Illuminate\Http\JsonResponse
     */
    public function find(int $id)
    {
        $event = Event::find($id);
        return $event ? response()->json($event, 200, [], JSON_NUMERIC_CHECK) : response()->json(null, 400);
    }
    /**
     * List
     * @param Request request
     * @return Illuminate\Http\JsonResponse
     */
    public function list(Request $request)
    {
        return Event::all();
    }

    /**
     * Renove
     * @param int $id
     * @return Illuminate\Http\JsonResponse
     */
    public function remove(int $id)
    {
        $event = Event::find($id);
        if (!$event) return response()->json(null, 400);
        return response()->json($event->delete());
    }

    /**
     * Update
     * @param Request request
     * @return Illuminate\Http\JsonResponse
     */
    public function update(int $id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['nullable', 'string'],
            'date' => ['nullable', 'string'],
            'description' => ['nullable', 'string'],
            'enable' => ['nullable', 'boolean'],
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toArray(), 400);
        }
        $validator = $validator->validate();
        $event = Event::find($id);
        if (!$event) return response()->json(['No encontrado'], 400);
        return $event->update($validator)
            ? response()->json($event, 200, [], JSON_NUMERIC_CHECK)
            : response()->json(['Error'], 502, [], JSON_NUMERIC_CHECK);
    }
}
