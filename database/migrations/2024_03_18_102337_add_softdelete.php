<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSoftdelete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tag_manager', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('search_console', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('google_analytics', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('gtagmanager', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // public function down()
    // {
    //     Schema::table('tag_manager', function (Blueprint $table) {
    //         $table->softDeletes();
    //     });
    // }
}
