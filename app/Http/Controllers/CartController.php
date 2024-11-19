<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::with('product')->where('user_id', auth()->id())->get();
        return view('carts.index', compact('carts'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        Cart::updateOrCreate(
            ['user_id' => auth()->id(), 'product_id' => $request->product_id],
            ['quantity' => $request->quantity]
        );

        return redirect()->route('cart.index')->with('success', 'Product added to cart.');
    }
}
