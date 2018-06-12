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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('src');
            $table->string('slug')->unique();
            $table->string('model')->nullable();
            $table->mediumText('description')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('supplier_id')->nullable();
            $table->integer('cpv_id')->nullable(); 
            $table->integer('tag_id')->nullable();
            $table->integer('price');
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
}
