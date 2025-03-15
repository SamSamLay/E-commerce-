<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $guarded;

   

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }
    public function orderItems(){
        return $this->hasMany(OrderItem::class);
    }

    public function shoppingCart(){
        return $this->hasMany(ShoppingCart::class);
    }
}
