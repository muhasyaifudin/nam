<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignIpv4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ipv4s', function (Blueprint $table) {
            $table->foreign('section_id')->references('id')->on('sections');
            $table->foreign('item_id')->references('id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ipv4s', function (Blueprint $table) {
           $table->dropForeign(['section_id']);
           $table->dropForeign(['item_id']);
        });
    }
}
