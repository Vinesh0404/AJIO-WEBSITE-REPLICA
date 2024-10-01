<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }

    public function addToCart(Request $request)
    {
        $productId = $request->product_id;
        $quantity = $request->quantity;

        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            // Increase quantity if product is already in cart
            $cart[$productId]['quantity'] += $quantity;
        } else {
            // Add new product to cart
            $product = Product::find($productId);

            if (!$product) {
                abort(404);
            }

            $cart[$productId] = [
                'name' => $product->name,
                'quantity' => $quantity,
                'price' => $product->price,
                'image' => $product->image_path,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart!');
    }

    public function updateCart(Request $request)
    {
        $productId = $request->product_id;
        $quantity = $request->quantity;

        if ($productId && $quantity) {
            $cart = session()->get('cart', []);

            if (isset($cart[$productId])) {
                $cart[$productId]['quantity'] = $quantity;
                session()->put('cart', $cart);
            }

            return redirect()->back()->with('success', 'Cart updated successfully');
        }
    }

    public function removeFromCart(Request $request)
    {
        $productId = $request->product_id;

        if ($productId) {
            $cart = session()->get('cart', []);

            if (isset($cart[$productId])) {
                unset($cart[$productId]);
                session()->put('cart', $cart);
            }

            return redirect()->back()->with('success', 'Product removed successfully');
        }
    }

    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->back()->with('success', 'Cart cleared successfully');
    }
}
