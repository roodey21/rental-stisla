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
            $table->id(); // id product / barang
            $table->string('name'); // nama barang sekalian typenya
            $table->foreignId('brand_id'); // merek ambil dari tabel brands
            $table->foreignId('category_id'); // category ambil dari tabel categories
            $table->string('description');
            $table->integer('stok');
            $table->string('image');
            $table->boolean('status')->default(true);
            $table->string('slug');
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
