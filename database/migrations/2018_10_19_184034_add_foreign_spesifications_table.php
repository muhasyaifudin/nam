<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignSpesificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('spesifications', function (Blueprint $table) {
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
         Schema::table('spesifications', function (Blueprint $table) {
            $table->dropForeign(['item_id']);
            
        });
    }
}
