<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnlistedOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enlisted_orders', function (Blueprint $table) {
           $table->unsignedBigInteger('id_order_product');
           $table->foreign('id_order_product')->references('id')->on('order_product');
           $table->unsignedBigInteger('id_provider');
           $table->foreign('id_provider')->references('id')->on('providers');
           $table->unsignedBigInteger('id_status');
            $table->foreign('id_status')->references('id')->on('status');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enlisted_orders');
    }
}
