<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Cart;

class CartController extends Controller
{
    public function cart()
    {
        return view('shopping-cart.cart');
    }


    public function addToCart($id)
    {
        $product = Product::find($id);

        if(!$product) {

            abort(404);

        }

        $cart = Cart::add($product->id, $product->name, 1 , $product->price,  ['photo' => $product->photo]);
    	session()->flash('success','Item added in cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                    $id => [
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => $product->price,
                        "photo" => $product->photo
                    ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }      

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        Cart::update($request->id, $request->quantity);

            session()->flash('success', 'Cart updated successfully');
    }

    public function remove(Request $request)
    {
        if($request->id) {

            Cart::remove($request->id);

            session()->flash('success', 'Product removed successfully');
        }
    }
}
