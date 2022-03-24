<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ImageController extends Controller
{
    /**
     * upload
     * @param Request request
     * @return Illuminate\Http\JsonResponse
     */
    public function upload(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tag' => ['required', 'string'],
            'image' => ['required', 'image']
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toArray(), 400);
        }
        $validator = $validator->validate();
        $image = Image::query()->where('tag', $validator['tag'])->first();
        $oldpath = $image->path;
        $path = $request->file('image')->store('images');
        if ($path)
            $image->path = $path;
        // remove ol image
        if (Storage::exists($oldpath)) Storage::delete($oldpath);
        // Save new Image Data
        return $image->save()
            ? response()->json($image, 200, [], JSON_NUMERIC_CHECK)
            : response()->json(['Error guardando imagen'], 502, [], JSON_NUMERIC_CHECK);
    }
}
