<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index(){
        return view('backend.restaurant.index');
    }

    public function ssd(){
        $data = Restaurant::query();
        return Datatables::of($data)
        ->addColumn('action', function ($each) {
            $edit_icon = '<a href="' . route('admin.user.edit', $each->id) . '" class="text-warning"><i class="fas fa-edit"></i></a>';
            $delete_icon = '<a href="#" class="text-danger delete" data-id="' . $each->id . '"><i class="fas fa-trash"></i></a>';

            return  '<div class="action-icon">' . $edit_icon   . ' ' .   $delete_icon . '</div>';
        })
        ->make(true);
    }
}
