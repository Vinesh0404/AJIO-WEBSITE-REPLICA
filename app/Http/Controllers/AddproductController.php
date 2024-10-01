<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddProduct;
use App\Models\Category;

class AddproductController extends Controller
{
    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        $categories = Category::all(); 
        return view('addproduct', compact('categories'));
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,category_id',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'rating' => 'nullable|numeric|min:0|max:5',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);
      
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->storeAs( $request->file('image')->getClientOriginalName());
            // Adjust 'public/product_images' as per your desired storage directory
        }

        AddProduct::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'price' => $request->price,
            'rating' => $request->rating,
            'image_path' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Product added successfully.');
    }
}
