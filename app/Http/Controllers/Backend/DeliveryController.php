<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Delivery;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DeliveryController extends Controller
{
    public function index(){
        return view('backend.delivery.index');
    }

    public function ssd(){
        $data = Delivery::query();
        return Datatables::of($data)
        ->addColumn('action', function ($each) {
            $menu_icon = '<a href="' . route('admin.delivery.show' , $each->delivery_token) . '" class="text-green"><i class="fas fa-info-circle"></i></a>';

            return  '<div class="action-icon">'  . $menu_icon . '</div>';
        })
        ->editColumn('created_at', function($each){
            return Carbon::parse($each -> created_at)->format('Y-m-d H:i:s');
        })
        ->rawColumns(['action'])
        ->make(true);
        

    }

    
    public function show($delivery_token){
        $order_menu =  DB::table('order_menus')->where('token', $delivery_token)->get();
        // dd($delivery_token);
        return view('backend.order-menu.index',compact('order_menu'));
    }
}
