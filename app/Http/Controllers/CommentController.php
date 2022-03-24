<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    /**
     * create
     * @param Request request
     * @return Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email'],
            'name' => ['required', 'string'],
            'message' => ['required', 'string'],
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toArray(), 400);
        }
        $validator = $validator->validate();
        $model = new Comment($validator);
        return $model->save()
            ? response()->json($model, 200, [], JSON_NUMERIC_CHECK)
            : response()->json($model->errors, 502, [], JSON_NUMERIC_CHECK);
    }
    /**
     * Find
     * @return Illuminate\Http\JsonResponse
     */
    public function find(int $id)
    {
        return \response()->json(Comment::find($id), 200, [], JSON_NUMERIC_CHECK);
    }

    /**
     * list
     * @return Illuminate\Http\JsonResponse
     */
    public function list()
    {
        return response()->json(Comment::query()->orderBy('id', 'desc')->get(), 200, [], JSON_NUMERIC_CHECK);
    }

    /**
     * Remove
     * @param int $id
     * @return Illuminate\Http\JsonResponse
     */
    public function remove(int $id)
    {
        return response()->json(Comment::find($id) &&  Comment::find($id)->delete(), 200, [], JSON_NUMERIC_CHECK);
    }

    /**
     * Update
     * @param Request request
     * @return Illuminate\Http\JsonResponse
     */
    public function update(int $id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['nullable', 'email'],
            'name' => ['nullable', 'string'],
            'message' => ['nullable', 'string'],
            'visible' => ['nullable', 'boolean'],
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toArray(), 400);
        }
        $validator = $validator->validate();
        return response()->json(Comment::query()->where('id', $id)->update($validator), 200, [], JSON_NUMERIC_CHECK);
    }
}
