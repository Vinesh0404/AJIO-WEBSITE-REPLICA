<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddProduct extends Model
{
    protected $table = 'products'; // Adjust table name if necessary

    protected $fillable = [
        'name', 'category_id', 'description', 'price', 'rating', 'image_path',
    ];
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
    // Ensure any other relevant model configurations are set correctly
}
