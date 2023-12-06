<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function getMovies(){
        $movies = Movie::with(['category', 'director'])->get();
        return $movies;
    }

    public function getMovie($id)
    {
        $movie=Movie::find($id);
        return $movie;
    }

    public function getMoviesPage(){
        $movies = Movie::with(['category', 'director'])->get();
        return view('movies', ["movies"=>$movies]);
    }

    public function getMoviePage($id)
    {
        $movie = Movie::with('director', 'category')->find($id);
        if (!$movie) {
            return response()->json(['message' => 'error'], 404);
        }
        return view('detail', ["data"=>$movie]);
    }
}
