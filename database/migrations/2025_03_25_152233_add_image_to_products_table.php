<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    if (!Schema::hasColumn('products', 'image')) {
        Schema::table('products', function (Blueprint $table) {
            $table->string('image')->nullable();
        });
    }
}

public function down()
{
    Schema::table('products', function (Blueprint $table) {
        $table->dropColumn('image');  // Drop the 'image' column if rolling back
    });
}

};
