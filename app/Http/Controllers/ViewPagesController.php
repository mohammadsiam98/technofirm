<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewPagesController extends Controller
{
    // homepage function
    public function homepage()
    {
        return view('pages.homepage.index');
    }

    // aboutUs function
    public function aboutUs()
    {
        return view('pages.about.about');
    }

    // portfolio function
    public function portfolio()
    {
        return view('pages.Portfolio.portfolio');
    }
}
