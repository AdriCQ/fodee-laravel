<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ImageController extends Controller
{

    /**
     * List
     * @return Illuminate\Http\JsonResponse
     */
    public function list()
    {
        return \response()->json(Image::query()->orderBy('id', 'desc')->get(), 200, [], JSON_NUMERIC_CHECK);
    }
    /**
     * upload
     * @param Request request
     * @return Illuminate\Http\JsonResponse
     */
    public function upload(int $id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => ['required', 'image']
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toArray(), 400);
        }
        $validator = $validator->validate();
        $image = Image::query()->find($id);
        $oldpath = $image->path;
        if (!Storage::disk('public')->exists('images'))
            Storage::disk('public')->makeDirectory('images');
        $path = 'storage/' . $request->file('image')->store('images', 'public');
        if ($path)
            $image->path = $path;
        // remove old image
        $oldpath = explode('storage/', $oldpath);
        if (isset($oldpath[1]) && Storage::disk('public')->exists($oldpath[1]))
            Storage::disk('public')->delete($oldpath[1]);
        // Save new Image Data
        return $image->save()
            ? response()->json($image, 200, [], JSON_NUMERIC_CHECK)
            : response()->json(['Error guardando imagen'], 502, [], JSON_NUMERIC_CHECK);
    }
}
