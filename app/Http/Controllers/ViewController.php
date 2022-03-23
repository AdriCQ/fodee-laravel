<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Config;
use App\Models\Dish;
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
    public function index()
    {
        $this->DATA['comments'] = Comment::query()->where('visible', true)->orderBy('updated_at', 'desc')->get();
        $catNames = Dish::query()->groupBy('category')->get('category');
        $categories = [];
        foreach ($catNames as $cat) {
            array_push($categories, [
                'name' => $cat->category,
                'dishes' => Dish::query()->where('category', $cat->category)->take(4)->get()
            ]);
        }
        $this->DATA['categories'] = $categories;
        $this->DATA['features'] = Dish::query()->orderBy('feature', 'desc')->take(6)->get();
        return view('welcome')->with($this->DATA);
    }
    /**
     * Menu
     * @return Illuminate\Contracts\View\View
     */
    public function menu()
    {
        $catNames = Dish::query()->groupBy('category')->get('category');
        $categories = [];
        foreach ($catNames as $cat) {
            array_push($categories, [
                'name' => $cat->category,
                'dishes' => Dish::query()->where('category', $cat->category)->get()
            ]);
        }
        $this->DATA['fullMenu'] = true;
        $this->DATA['categories'] = $categories;
        return view('menu')->with($this->DATA);
    }
}
