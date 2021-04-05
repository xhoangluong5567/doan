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
            $table->string('name');
            $table->string('images')->nullable();
            $table->double('price');
            $table->string('warranty');
            $table->string('accessories');
            $table->string('discount');
            $table->string('status');
            $table->tinyInteger('active')->default(1)->index();
            $table->tinyInteger('hot')->default(1)->index();
            $table->string('desc');
            $table->foreignId('categories_id')->references('id')->on('categories')
            ->onDelete('cascade');
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
