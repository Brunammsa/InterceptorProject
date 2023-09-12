<?php

namespace App\Http\Controllers;

use App\Models\Countries;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SearchFilmsController extends Controller
{
    public function index(): View
    {
        $countries = Countries::all();

        return view('search-film')->with('countries', $countries);
    }
}
