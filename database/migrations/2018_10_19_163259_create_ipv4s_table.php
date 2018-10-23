<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIpv4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipv4s', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('id ipv4 address');
            $table->string('ipv4_subnet', 50)->comment('ipv4 subnet');
            $table->string('ipv4_description', 250)->comment('keterangan ipv4');
            $table->string('ipv4_location', 50)->comment('lokasi ipv4 address');
            $table->enum('ipv4_routable', ['Yes', 'No'])->comment('di dalam router (Yes/No)');
            $table->char('ipv4_vlan',10)->comment('vlan ipv4 address');
            $table->bigInteger('section_id')->comment('FK id section');
            $table->bigInteger('item_id')->comment('FK id item');
            $table->char('ipv4_port',10)->comment('port ipv4 address');
            $table->string('ipv4_mastersubnet', 50)->comment('subnet master ipv4');
            $table->char('ipv4_contact',20)->comment('kontak ipv4 address');
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
        Schema::dropIfExists('ipv4s');
    }
}
