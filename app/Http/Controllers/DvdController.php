<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DvdTitle;

class DvdController extends Controller
{
    public function index()
    {
        $dvdTitles = DvdTitle::with('genre', 'rating')->take(10)->get();

        return view('index', [
            'dvds' => $dvdTitles
        ]);
    }
}
