<?php

// In app/Http/Controllers/ProductController.php
namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($categoryId)
    {
        // Adjust the query to use category_id
        $category = Category::with('products')->where('category_id', $categoryId)->firstOrFail();
        return view('products.show', compact('category'));
    }
}


