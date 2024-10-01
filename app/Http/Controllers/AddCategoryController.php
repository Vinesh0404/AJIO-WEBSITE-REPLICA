<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AddCategoryController extends Controller
{
    /**
     * Show the form for creating a new category.
     */
    public function create()
    {
        return view('addcategory');
    }

    /**
     * Store a newly created category in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->storeAs( $request->file('image')->getClientOriginalName());
            // Adjust 'public/product_images' as per your desired storage directory
        }

        Category::create([
            'name' => $request->name,
            'image_path' => $imagePath,
        ]);
        return redirect()->back()->with('success', 'category added successfully.');

    }
}
