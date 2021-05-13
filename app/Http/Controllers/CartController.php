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
        return redirect()->back()->with('success',"Creating class sucessfully!");
    }

    public function destroy(Request $request,$id)
    {
        $cart = Cart::content()->where('id',$id);

        if($cart->isNotEmpty()){
            Cart::remove('id',$id);
        }
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
//        dd(Cart::content());
//        dd($request->all());
        Cart::update($id,['qty'=>$request->qty,"options"=>['size'=>$request->size]]);
        return back();
    }
}