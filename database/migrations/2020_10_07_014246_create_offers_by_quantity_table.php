<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersByQuantityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers_by_quantity', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('discount_percentage', 100)->unsigned();
            $table->integer('minimum_amount', 100)->unsigned();
            $table->date('start_date');
            $table->date('end_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers_by_quantity');
    }
}
