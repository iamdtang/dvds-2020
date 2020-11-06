<?php

use Illuminate\Support\Facades\Route;
use App\Models\DvdTitle;

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

Route::get('/', function () {
    // $dvdTitles = DvdTitle::take(10)->get();
    $dvdTitles = DvdTitle::with('genre', 'rating')->take(10)->get();

    return view('index', [
        'dvds' => $dvdTitles
    ]);
});
