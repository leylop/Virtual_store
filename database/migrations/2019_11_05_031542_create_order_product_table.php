<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('order_product', function (Blueprint $table) {
           $table->bigIncrements('id');
           // $table->timestamps();
           $table->unsignedBigInteger('id_order');
           $table->foreign('id_order')->references('id')->on('orders');
           $table->unsignedBigInteger('id_product');
           $table->foreign('id_product')->references('id')->on('products');
           $table->integer('quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_product');
    }
}
