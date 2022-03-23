<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    private $DATA = [];
    /**
     * Constructor
     */
    public function __construct()
    {
        $config = Config::first();
        $this->DATA['config'] = $config;
    }
    /**
     * index
     * @return Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        return view('welcome')->with($this->DATA);
    }
}
