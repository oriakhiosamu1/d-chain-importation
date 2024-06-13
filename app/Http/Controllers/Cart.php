<?php

namespace App\Http\Controllers;

use App\Models\Cart as ModelsCart;
use App\Models\Product;
use Illuminate\Http\Request;

class Cart extends Controller
{
    //ADD TO CART METHOD
    public function addToCart(Product $productId, Request $request){
        $request->validate([
            'quantity' => 'required',
        ]);

        if(auth()->user()->isAdmin){
            abort(403, 'CANNOT ADD PRODUCT TO CART');
        }

        $subtotal = $productId->price * $request->quantity;

        ModelsCart::create([
            'user_id' => auth()->id(),
            'product' => $productId->name,
            'quantity' => $request->quantity,
            'price' => $productId->price,
            'subtotal' => $subtotal,
            'total' => 0,
            'product_id' => $productId->id
        ]);

        return back();
    }

    // DISPLAY CART DATA
    public function cart(){
        $cart = auth()->user()->cart;

        return view('vitals.cart', [
            'cart' => $cart
        ]);
    }

    // UPDATE CART METHOD
    public function update(ModelsCart $cartId, Request $request){

        $subtotal = $cartId->price * $request->quantity;

        $cartId->update([
            'quantity' => $request->quantity,
            'subtotal' => $subtotal
        ]);

        return back();
    }

    // REMOVE PRODUCT FROM CART
    public function remove(ModelsCart $cartId){
        $cartId->delete();

        return back();
    }
}
