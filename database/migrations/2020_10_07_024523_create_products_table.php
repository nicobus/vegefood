<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->string('name');
            $table->foreignId('brand_id')->constrained();
            $table->string('origin');
            $table->bigInteger('stock');
            $table->double('price');
            $table->bigInteger('sold_units');
            $table->foreignId('offer_id')->constrained()->onDelete('cascade');
            $table->foreignId('offer_by_quantity_id')->constrained('offers_by_quantity')->onDelete('cascade');
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
}
