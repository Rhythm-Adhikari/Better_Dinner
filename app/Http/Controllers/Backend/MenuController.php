<?php

namespace App\Http\Controllers\Backend;

use App\Models\Menu;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{



    // public function ssd($id)
    // {
    //     // $restaurant=Restaurant::findOrFail($id);
    //     $data =  Menu::with('restaurant')->where('restaurant_id',$id)->get();
    //     // $data = Menu::query()->where('restaurant_id',$restaurant->id);
    //     return Datatables::of($data)
    //         ->addColumn('action', function ($each) {
    //             $edit_icon = '<a href="' . route('admin.user.edit', $each->id) . '" class="text-warning"><i class="fas fa-edit"></i></a>';
    //             $delete_icon = '<a href="#" class="text-danger delete" data-id="' . $each->id . '"><i class="fas fa-trash"></i></a>';

    //             return  '<div class="action-icon">' . $edit_icon   . ' ' .   $delete_icon . '</div>';
    //         })
    //         ->rawColumns(['action'])
    //         ->make(true);
    // }

    public function create(){
        return view('backend.menu.create');
    }
}
