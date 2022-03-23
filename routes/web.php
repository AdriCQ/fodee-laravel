<?php

use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ViewController::class, 'index'])->name('welcome');
Route::get('/menu', [ViewController::class, 'menu'])->name('menu');


Route::group(['prefix' => 'develop'], function () {
    Voyager::routes();
});
