<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteColumnInKontaks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kontaks', function (Blueprint $table) {
            //
            $table->dropColumn('phone_tr_2');
            $table->dropColumn('phone_cr_1');
            $table->dropColumn('phone_cr_2');
            $table->dropColumn('wa_1');
            $table->dropColumn('wa_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kontaks', function (Blueprint $table) {
            //
        });
    }
}
