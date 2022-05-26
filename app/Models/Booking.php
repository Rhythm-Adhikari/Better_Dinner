<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function menus(){
        return $this->hasMany(OrderMenu::class,'token','booking_token');
    }
}
