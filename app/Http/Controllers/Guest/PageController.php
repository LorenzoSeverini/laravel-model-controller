<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::orderBy('title', 'asc')->get(['title', 'vote']);

        return view('welcome', compact('movies'));
    }
}
