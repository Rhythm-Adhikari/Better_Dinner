<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(){
        return view('about');
    }


    public function booking(){
        return view('booking');
    }

    public function order(){
        return view('order');
    }
}
