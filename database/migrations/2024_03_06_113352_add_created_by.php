<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCreatedBy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('blogs', function (Blueprint $table) {
            // Tambahkan kolom 'created_by' dengan tipe data yang sesuai
            $table->string('created_by')->nullable(); // Anda bisa menyesuaikan tipe data dan konfigurasi lainnya
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
