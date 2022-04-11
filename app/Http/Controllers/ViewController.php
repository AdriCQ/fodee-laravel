<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Config;
use App\Models\Dish;
use App\Models\Event;
use App\Models\Image;
use App\Models\Reserve;
use App\Models\User;
use App\Notifications\ReserveNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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
     * dishDetails
     */
    public function dishDetails(int $id)
    {
        $this->DATA['dish'] = Dish::find($id);
        if (!$this->DATA['dish'])
            return redirect()->route('welcome');
        $this->DATA['fullMenu'] = true;
        return view('dish-details')->with($this->DATA);
    }
    /**
     * eventDetails
     */
    public function eventDetails(int $id)
    {
        $this->DATA['event'] = Event::find($id);
        if (!$this->DATA['event'])
            return redirect()->route('welcome');

        $this->DATA['fullMenu'] = true;
        return view('event-details')->with($this->DATA);
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
        $this->DATA['features'] = Dish::query()->where('feature', true)->get();
        $images = [];
        foreach (Image::all() as $img) {
            $images[$img->tag] = $img->path;
        }
        $this->DATA['images'] = $images;
        $this->DATA['events'] = Event::query()->where('enable', true)->get();
        return view('welcome')->with($this->DATA);
    }

    /**
     * resere
     * @param Request request
     * @return Illuminate\Http\JsonResponse
     */
    public function reserve(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'date' => ['required', 'string'],
            'occation' => ['required', 'string'],
            'message' => ['nullable', 'string']
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toArray(), 400);
        }
        $validator = $validator->validate();
        $reserv = new Reserve($validator);
        if ($reserv->save()) {
            // $now = \DateTime::createFromFormat('U.u', microtime(true));

            $jsonData = json_encode($reserv);
            $filename = $reserv->name . '_' . now()->timestamp . '.json';
            $fcont = file_get_contents("../hash");
            $jsonPath = str_replace(array("\n", "\r"), '', $fcont);
            // $fp = fopen("../../messages/" . $jsonPath . "/" . $filename, 'w');
            // fwrite($fp, $str);
            // fclose($fp);
            Storage::disk('messages')->put($jsonPath . '/' . $filename, json_encode($jsonData));
            // Send email Notification
            $client = new User([
                'email' => $reserv->email,
                'name' => $reserv->name
            ]);
            $vendor = new User([
                'email' => $this->DATA['config']->email,
                'name' => $this->DATA['config']->title
            ]);

            Notification::send($client, new ReserveNotification($reserv));
            Notification::send($vendor, new ReserveNotification($reserv, false));

            $this->DATA['notification']['title'] = 'Reserva Completada';
            $this->DATA['notification']['content'] = [
                'Le hemos enviado a un email con los detalles de la reserva. Si desea realizar algún cambio debe contactarnos a ' . $this->DATA['config']['email'] . ' y le atenderemos inmediatamente'
            ];
        } else {
            $this->DATA['notification']['title'] = 'ERROR';
            $this->DATA['notification']['content'] = [
                'No pudimos guardar su reserva. Si lo desea puede contactarnos a ' . $this->DATA['config']['email'] . ' y le atenderemos inmediatamente'
            ];
        }
        $this->DATA['fullMenu'] = true;
        return view('notifications')->with($this->DATA);
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
