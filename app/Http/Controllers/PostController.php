<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show_home()
    {
        return view('page.home', ['title' => 'Home',]);
    }
    public function show_destinations()
    {
        return view('page.destinations', ['title' => 'Destinations',]);
    }
    public function show_packages()
    {
        return view('page.packages', ['title' => 'Packages',]);
    }
    public function show_homestays()
    {
        return view('page.homestays', ['title' => 'Homestays',]);
    }
}
