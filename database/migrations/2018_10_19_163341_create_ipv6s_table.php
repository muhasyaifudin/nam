<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIpv6sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipv6s', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('id ipv6 address');
            $table->string('ipv6_subnet', 50)->comment('ipv6 subnet');
            $table->string('ipv6_description', 250)->comment('keterangan ipv6');
            $table->string('ipv6_location', 50)->comment('lokasi ipv6 address');
            $table->enum('ipv6_routable', ['Yes', 'No'])->comment('di dalam router (Yes/No)');
            $table->char('ipv6_vlan',10)->comment('vlan ipv6 address');
            $table->bigInteger('section_id')->comment('FK id section');
            $table->bigInteger('item_id')->comment('FK id item');
            $table->char('ipv6_port',10)->comment('port ipv6 address');
            $table->string('ipv6_mastersubnet', 50)->comment('subnet master ipv6');
            $table->char('ipv6_contact',20)->comment('kontak ipv6 address');
            $table->timestamps();
            // $table->foreign('section_id')->references('id')->on('sections');
            // $table->foreign('item_id')->references('id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ipv6s');
    }
}
