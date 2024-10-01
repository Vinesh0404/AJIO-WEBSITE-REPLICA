<?php
// CartItem.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = [
        'product_id', 'user_id', 'quantity'
    ];

    // Define the relationship with Product
    public function product()
    {
        return $this->belongsTo(AddProduct::class);
    }
}
