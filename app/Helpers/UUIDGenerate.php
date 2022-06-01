<?php

namespace App\Helpers;

use App\Wallet;
use App\Models\Pickup;
use App\Models\Booking;
use App\Models\Delivery;
use App\Models\Transaction;

class UUIDGenerate{

    public static function refNumber(){
        $number = mt_rand(1000000000000000,9999999999999999);
        if(Transaction::where('ref_no',$number)->exists()){
            self::refNumber();
        }
        return $number;
    }

    public static function trxId(){
        $number = mt_rand(1000000000000000,9999999999999999);
        if(Transaction::where('trx_id',$number)->exists()){
            self::trxId();
        }
        return $number;
    }

    public static function pickUpToken(){
        $number = 'pickup-'.mt_rand(100000,999999);
        if(Pickup::where('pickup_token',$number)->exists()){
            self::pickUpToken();
        }
        return $number;
    }

    public static function deliveryToken(){
        $number = 'delivery-'.mt_rand(100000,999999);
        if(Delivery::where('delivery_token',$number)->exists()){
            self::deliveryToken();
        }
        return $number;
    }

    public static function bookingToken(){
        $number = 'booking-'.mt_rand(100000,999999);
        if(Booking::where('booking_token',$number)->exists()){
            self::bookingToken();
        }
        return $number;
    }
}

?>