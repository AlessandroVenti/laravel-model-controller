<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movies;

class MoviesController extends Controller {
    
    public function moviesFunction() {

        $movies = Movies::all();
        // dd($movies);
        return view('pages.movies', compact('movies'));
    }

    public function movieDetailFunction($id) {

        $movie = Movies::findOrFail($id);

        return view('pages.movie', compact('movie'));
    }
}
