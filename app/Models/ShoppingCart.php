<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    /** @use HasFactory<\Database\Factories\ShoppingCartFactory> */
    use HasFactory;

    protected $guarded;

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function cartItems(){
        return $this->hasMany(ShoppingCartItem::class);
    }
}
