<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpesificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spesifications', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('id spesifikasi barang');
            $table->string('spesification_hw',100)->comment('spesifikasi hardware/perangkat keras');
            $table->string('spesification_os',100)->comment('spesifikasi sistem operasi');
            $table->char('spesification_processor',20)->comment('spesifikasi prosesor');
            $table->char('spesification_memory',20)->comment('spesifikasi memori');
            $table->char('spesification_storage',20)->comment('spesifikasi penyimpanan');
            $table->bigInteger('item_id')->comment('FK id item');
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
        Schema::dropIfExists('spesifications');
    }
}
