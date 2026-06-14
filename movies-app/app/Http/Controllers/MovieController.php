<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with('genre')->get();

        return view('movies.index', compact('movies'));
    }

    public function create()
    {
        $genres = Genre::all();

        return view('movies.create', compact('genres'));
    }

    public function store(Request $request)
    {
        Movie::create($request->validate([
            'genre_id' => 'required|exists:genres,id',
            'title' => 'required',
            'director' => 'required',
            'release_year' => 'required|integer',
            'rating' => 'required|numeric|min:0|max:10',
        ]));

        return redirect()->route('movies.index');
    }
}