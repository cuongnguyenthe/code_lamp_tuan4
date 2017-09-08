<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products',function (Blueprint $table){
            $table ->increments('id');
            $table ->string('name');
            $table ->integer('id_type')-> unsigned();
            $table ->foreign('id_type')-> references('id') ->on('type_products');
            $table ->string('description');
            $table ->float('price');
            $table ->string('image');
            $table ->int('new',2);
            $table ->timestamps();

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
