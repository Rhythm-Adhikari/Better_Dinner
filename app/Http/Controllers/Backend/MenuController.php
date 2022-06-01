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
    public function create(){
        $restaurants = Restaurant::get();
        return view('backend.menu.create',compact("restaurants"));
    }




    public function store(Request $request){
//       

        $menu = new menu();
        $menu->restaurant_id= $request->restaurant_id;
        $menu->name= $request->name;
        $menu->price= $request->price;
        $menu->description= $request->description;
        $menu->save();

        return redirect()->route('admin.menu.index')->with('create', "Successfully created");

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

    public function destroy($id)
    {
        $menu= Menu::findOrFail($id);
        $menu->delete();

        return 'success';
    }
}
