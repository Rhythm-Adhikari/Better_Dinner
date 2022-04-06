<?php

namespace App\Http\Controllers\Api;
use App\Http\Resources\ProfileResource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function profile(){
        $user = auth()->user();
        $data = new ProfileResource($user);
        return success('success', $data);
    }
}
