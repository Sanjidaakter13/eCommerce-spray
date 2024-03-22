<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function view()
    {
        return view('frontend.template.master');
    }

    public function home()
    {
        return view('frontend.pages.home');  
    }
    public function aboutus()
    {
        return view('frontend.pages.aboutus');  
    }
    public function shop()
    {
        return view('frontend.pages.shop');  
    }
    public function blog()
    {
        return view('frontend.pages.blog');  
    }
    public function contact()
    {
        return view('frontend.pages.contact');  
    }
}
