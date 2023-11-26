<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customcontroller extends Controller
{
    public function home()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function doctor()
    {
        return view('doctor');
    }
    public function testimonial()
    {
        return view('testimonial');
    }
    public function treatment()
    {
        return view('treatment');
    }
}