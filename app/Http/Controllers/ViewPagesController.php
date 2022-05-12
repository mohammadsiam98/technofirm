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

    // blog function
    public function blog()
    {
        return view('pages.blogs.blog');
    }

    // contactUs function
    public function contactUs()
    {
         return view('pages.contactForm.contactform');
    }
    // Dashboard function
    public function dashboard()
    {
    return view('pages.ADMIN_DASHBOARD.admin_dashboard_control');
    }


}
