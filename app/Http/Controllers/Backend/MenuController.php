<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;


class MenuController extends Controller
{
    //



    public function ssd($id)
    {

        $data = Menu::query();

        return Datatables::of($data)
            ->addColumn('action', function ($each) {
                $edit_icon = '<a href="' . route('admin.restaurant.edit', $each->id) . '" class="text-warning"><i class="fas fa-edit"></i></a>';
                $delete_icon = '<a href="#" class="text-danger delete" data-id="' . $each->id . '"><i class="fas fa-trash"></i></a>';


                return  '<div class="action-icon">' . $edit_icon   . ' ' .   $delete_icon . '</div>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
