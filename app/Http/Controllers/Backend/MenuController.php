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
    public function index(){
        return view('backend.restaurant.index');
    }

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

    public function create()
    {
        return view('backend.menu.create');
    }

    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        return view('backend.menu.edit', compact('menu'));
    }

    public function update($id, Request $request)
    {

        $menu = Menu::findOrFail($id);
        $menu->name = $request->name;
        $menu->price = $request->price;
        $menu->description = $request->description;
        $menu->update();

        return redirect()->route('admin.menu.index')->with('create', "Successfully updated");
    }
}
