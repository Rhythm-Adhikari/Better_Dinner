<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        return view('backend.user.index');
    }

    public function ssd(){
        $data = User::query();
        return Datatables::of($data)
        ->editColumn('created_at', function ($each) {
            return Carbon::parse($each->created_at)->format('Y-m-d H:i:s');
        })
        ->editColumn('updated_at', function ($each) {
            return Carbon::parse($each->updated_at)->format('Y-m-d H:i:s');
        })
        ->addColumn('action', function ($each) {
            $edit_icon = '<a href="' . route('admin.user.edit', $each->id) . '" class="text-warning"><i class="fas fa-edit"></i></a>';
            $delete_icon = '<a href="#" class="text-danger delete" data-id="' . $each->id . '"><i class="fas fa-trash"></i></a>';

            return  '<div class="action-icon">' . $edit_icon   . ' ' .   $delete_icon . '</div>';
        })
        ->make(true);
    }
}
