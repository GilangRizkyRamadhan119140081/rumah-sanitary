<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAboutUs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_about_us', function (Blueprint $table) {
            $table->id();
            $table->longtext('about_us')->nullable();
            $table->integer('customer')->nullable();
            $table->integer('start_year')->nullable();
            $table->integer('product_order')->nullable();
            $table->integer('quality_product')->nullable();
            $table->longtext('history')->nullable();
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
        Schema::dropIfExists('table_about_us');
    }
}
