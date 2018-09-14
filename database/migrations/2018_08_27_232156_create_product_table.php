<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('location_id');
            $table->string('rooms_count');
            $table->string('land_size');
            $table->string('bath_count');
            $table->string('house_size');
            $table->string('address');
            $table->string('description');
            $table->string('cost');
            $table->string('phone_number');
            $table->boolean('is_negotiable');
            $table->boolean('email');
            $table->integer('user_id');
            $table->integer('catagory_id');
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
        Schema::dropIfExists('product');
    }
}
