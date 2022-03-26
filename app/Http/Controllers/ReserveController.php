<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    /**
     * List
     * @return Illuminate\Http\JsonResponse
     */
    public function list()
    {
        return response()->json(Reserve::query()->orderBy('id', 'desc')->get());
    }

    /**
     * remove
     * @param Request request
     * @return Illuminate\Http\JsonResponse
     */
    public function remove(int $id)
    {
        return response()->json(Reserve::query()->where('id', $id)->delete());
    }
}
