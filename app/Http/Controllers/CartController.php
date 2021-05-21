<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::content();

        return view('cart',compact('carts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id)
    {
        $product = Product::findOrFail($id);
        Cart::add([['id'=>$product->id,'name' => $product->name,'qty' =>1,'price'=>$product->price,'weight'=>0]]);
        if ($request->product_id && ($request->increment) == 1) {
            $rows = Cart::search(function($key, $value) {
                return $key->id == $request->product_id;
            });
            $item = $rows->first();
            Cart::update($item->rowId, $item->qty + 1);
        }

        //decrease the quantity
        if (($request->decrease) == 1) {
            $rows = Cart::search(function($key, $value) {
                return $key->id == $request->product_id;
            });
            $item = $rows->first();
            Cart::update($item->rowId, $item->qty - 1);
        }
        return redirect()->back()->with('success',"Add product sucessfully!");
    }

    public function increment(Request $request,$id){

            $rows = Cart::search(function($key, $value) use ($id) {
                return $key->id == $id;
            });
            $item = $rows->first();
            Cart::update($item->rowId, $item->qty + 1);
        return redirect()->back()->with('success',"Add product sucessfully!");

    }

    public function decrease(Request $request,$id){

        $rows = Cart::search(function($key, $value) use ($id) {
            return $key->id == $id;
        });
        $item = $rows->first();
        Cart::update($item->rowId, $item->qty - 1);
    return redirect()->back()->with('success',"Add product sucessfully!");

}

    public function destroy(Request $request,$id)
    {
        // dd($id);
        $rowId = Cart::search(function ($cart, $key) use($id) {
            return $cart->id == $id;
         })->first()->rowId;
        Cart::remove($rowId);
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        Cart::update($id,['qty'=>$request->qty,"options"=>['size'=>$request->size]]);
        return back();
    }
}