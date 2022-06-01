<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(){
        return view('backend.transaction.index');
    }

    public function ssd(){
        $data = Transaction::query();
        return Datatables::of($data)
        ->make(true);
    }

}
