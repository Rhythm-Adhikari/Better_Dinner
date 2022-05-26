<?php

namespace App\Http\Controllers\Frontend;

use PDO;
use App\Models\Menu;
use App\Models\Pickup;
use App\Models\Restaurant;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use App\Helpers\UUIDGenerate;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\OrderMenu;
use App\Models\Transaction;

class PageController extends Controller
{

    public function booking()
    {
        $restaurants = Restaurant::get();
        return view('booking', compact("restaurants"));
    }

    public function order()
    {
        $restaurants = Restaurant::get();
        return view('order', compact("restaurants"));
    }

    public function restaurant()
    {
        $restaurants = Restaurant::get();
        return view('restaurant', compact("restaurants"));
    }

    public function menu($restaurant_id)
    {
        $menus = DB::table('menus')->where('restaurant_id', $restaurant_id)->get();
        return view('order', compact('menus'));
    }

    public function menus()
    {
        $menus = Menu::with('restaurant')->get();
        return view('menus', compact('menus'));
    }

    // CART
    public function cart()
    {
        return view('cart');
    }

    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');
        return redirect()->route('cart.list');
    }


    // Pickup Order

    public function pickup(Request $request)
    {
        $cartItems = \Cart::getContent();
        return view('pickup', compact('cartItems'));
    }
    public function pickUpConfirm()
    {
        $cartItems = \Cart::getContent();
        $pickup = new Pickup();
        $pickup->user_id = auth()->user()->id;
        $pickup->total = \Cart::getTotal();
        $pickup->pickup_token = UUIDGenerate::pickUpToken();
        $pickup->save();

        foreach ($cartItems as $item) {
            $menus = new OrderMenu();
            $menu =  DB::table('menus')->where('id', $item->id)->first();
            $restaurantId = DB::table('restaurants')->where('id', $menu->restaurant_id)->first();
            $menus->name = $item->name;
            $menus->quantity = $item->quantity;
            $menus->restaurant_id = $restaurantId->id;
            $menus->token = $pickup->pickup_token;
            $menus->save();
        }

        $transaction = new Transaction();
        $transaction->user_id = auth()->user()->id;
        $transaction->ref_no = UUIDGenerate::refNumber();
        $transaction->trx_id = UUIDGenerate::trxId();
        $transaction->amount = \Cart::getTotal();
        $transaction->token = $pickup->pickup_token;
        $transaction->save();
        \Cart::clear();
        return redirect(route('pickupdetail'));
    }

    public function pickUpDetail()
    {
        $pickupDetail = DB::table('pickups')->where('user_id', auth()->user()->id)->latest('created_at')->first();
        $menus =  DB::table('order_menus')->where('token', $pickupDetail->pickup_token)->get();

        return view('pickup-up-detail', compact('pickupDetail', 'menus'));
    }

    // Delivery
    public function delivery(Request $request)
    {
        $cartItems = \Cart::getContent();
        return view('delivery', compact('cartItems'));
    }



    // Footer Links

    public function about()
    {
        return view('about');
    }
    public function policy()
    {
        return view('policy');
    }
    public function tc()
    {
        return view('tc');
    }
}
