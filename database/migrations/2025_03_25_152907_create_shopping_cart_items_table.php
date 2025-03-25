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
        Schema::create('shopping_cart_items', function (Blueprint $table) {
            $table->id();  // Auto-incrementing primary key
            $table->foreignId('shopping_cart_id')->constrained()->onDelete('cascade');  // Foreign key for shopping cart
            $table->foreignId('product_id')->constrained()->onDelete('cascade');  // Foreign key for product
            $table->integer('quantity')->default(1);  // Quantity of the product in the cart
            $table->timestamps();  // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shopping_cart_items');
    }
};
