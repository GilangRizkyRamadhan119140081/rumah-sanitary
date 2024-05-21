<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('excerpt')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('kategori_id')->nullable()->references('id')->on('kategori_produk');
            $table->foreignId('brand_id')->nullable()->references('id')->on('brand');
            $table->foreignId('users_id')->nullable()->references('id')->on('users');
            $table->longText('deskripsi')->nullable();
            $table->double('price')->nullable();
            $table->double('price_disc')->nullable();
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
        Schema::dropIfExists('produk');
    }
}
