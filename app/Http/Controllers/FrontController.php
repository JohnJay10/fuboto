<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index() {
        return view('frontend.index');
    }

    
    public function about_us() {
        return view('frontend.about');
    }

    
    public function service() {
        return view('frontend.service');
    }
    public function contact() {
        return view('frontend.contact');
    }
}
