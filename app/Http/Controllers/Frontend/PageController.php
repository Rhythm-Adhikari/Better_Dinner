<?php

namespace App\Http\Controllers\Frontend;

use PDO;
use App\Models\Menu;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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

    public function menu($restaurant_id){
    $menus = DB::table('menus')->where('restaurant_id',$restaurant_id )->get();
    return view('order', compact('menus'));
    }
}
