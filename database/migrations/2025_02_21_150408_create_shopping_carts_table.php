<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        
           if(!Schema::hasTable('shopping_carts')){
            Schema::create('shopping_carts', function (Blueprint $table) {
                $table->id();  // This creates an auto-incrementing primary key called 'id'
                $table->bigInteger('user_id')->unsigned();
                $table->timestamps();
            
                // If 'shopping_cart_id' is meant to be unique, you can make it a unique key
                $table->unique('shopping_cart_id');
            });
           }
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shopping_carts');
    }
};
