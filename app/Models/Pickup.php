<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pickup extends Model
{
    use HasFactory;

    public function menus(){
        return $this->hasMany(OrderMenu::class,'token','pickup_token');
    }
}
