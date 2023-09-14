<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MoviesController extends Controller
{
    public function recentSearchs():View
    {
        return view('recent-searches');
    }

    public function search(): View
    {
        return view('search-film');
    }

    public function editPlataform(): View
    {
        return view('plataforms');
    }

    public function updatePlataform()
    {
        return to_route('plataforms');
    }
}
