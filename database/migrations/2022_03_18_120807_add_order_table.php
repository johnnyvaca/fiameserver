<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOrderTable extends Migration
{
    /**
     * Table order contains the number of products a person has ordered and paid
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {

            $table->id();
            $table->integer('quantity');
            $table->integer('paid');
            $table->dateTime('order_date');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
