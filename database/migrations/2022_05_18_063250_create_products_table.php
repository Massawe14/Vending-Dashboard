<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('products')) return;
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_id');
            $table->string('name');
            $table->string('image');
            $table->decimal('price', 5, 2);
            $table->integer('quantity');
            $table->integer('slot_number');
            $table->string('category');
            $table->string('vending_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
