<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $guarded;

    protected $with = ['category','brand','supplier','orderItems'];//Eager Loading

    public function scopeFilter($query,$filter){
      
        $query->when($filter['category']??false,function($query,$slug){
            //dd($slug);
            $query->whereHas('category',function($query) use ($slug){
                $query->where('slug',$slug);//slug is column name
            });
                        
        });

        $query->when($filter['username']??false,function($query,$username){
            //dd($slug);
            $query->whereHas('author',function($query) use ($username){
                $query->where('username',$username);//slug is column name
            });
                        
        });

    }

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
