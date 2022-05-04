<?php

namespace App\Http\Controllers;

use App\Movie;

class MovieList extends Controller
{
    public function index() {
        $data = [
            'movies' => Movie::all(),
        ];
        return view('Movie-list', $data);
    }
}
