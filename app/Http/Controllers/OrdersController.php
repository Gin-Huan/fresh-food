<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
class OrdersController extends Controller
{
    public function store(Request $request){
        $carts = Cart::content();

        $orders = new Orders();
        $orders->customer_id = Auth::user()->id;
        $list = [];
        foreach ($carts as $key => $value) {
            $list[] = [
                'id' => $value->id,
                'name' => $value->name,
                'price' => $value->price
        ];
        }

        $orders->detail = \json_encode($list);

        $orders->status = 0;
        $orders->price = Cart::priceTotal();
        $orders->save();

        Cart::destroy();

        return redirect()->back();
    }
}