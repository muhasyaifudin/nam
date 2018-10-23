<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('id supplier');
            $table->string('supplier_name', 100)->comment('nama supplier');
            $table->string('supplier_address', 250)->comment('alamat supplier');
            $table->string('supplier_email', 30)->comment('email supplier');
            $table->string('supplier_description', 250)->comment('keterangan supplier');
            $table->char('supplier_phone', 20)->comment('no telepon supplier');
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
        Schema::dropIfExists('suppliers');
    }
}
