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
            $edit_icon = '<a href="' . route('admin.restaurant.edit', $each->id) . '" class="text-warning"><i class="fas fa-edit"></i></a>';
            $delete_icon = '<a href="#" class="text-danger delete" data-id="' . $each->id . '"><i class="fas fa-trash"></i></a>';

            return  '<div class="action-icon">' . $edit_icon   . ' ' .   $delete_icon . '</div>';
        })
        ->rawColumns(['action'])
        ->make(true);

    }
    public function create(){
        return view('backend.restaurant.create');
    }
    public function store(Request $request){
        $request->validate(
            [
                'email'=>['required', 'string', 'email', 'max:225', 'unique:restaurants']
            ]
        );

        $restaurant = new Restaurant();
        $restaurant->name= $request->name;
        $restaurant->location= $request->location;
        $restaurant->phone= $request->phone;
        $restaurant->email= $request->email;
        $restaurant->description= $request->description;
        $restaurant->save();

        return redirect()->route('admin.restaurant.index')->with('create', "Successfully created");

    }
    public function destroy($id)
    {
        $restaurant= Restaurant::findOrFail($id);
        $restaurant->delete();

        return 'success';
    }

    public function edit($id){
        $restaurant=Restaurant::findOrFail($id);
        return view('backend.restaurant.edit', compact('restaurant'));
    }
    public function update($id, Request $request){
        $request->validate(
            [
                'email'=>'required|string|email|max:225|unique:restaurants,email,' . $id,
            ]
        );
        $restaurant=Restaurant::findOrFail($id);
        $restaurant->name= $request->name;
        $restaurant->location= $request->location;
        $restaurant->phone= $request->phone;
        $restaurant->email= $request->email;
        $restaurant->description= $request->description;
        $restaurant->update();
        return redirect()->route('admin.restaurant.index')->with('create', "Successfully created");

    }
}
