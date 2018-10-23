<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('id barang');
            $table->string('item_number', 30)->comment('no barang');
            $table->string('item_name', 150)->comment('nama barang');
            $table->string('item_brand', 100)->comment('merk barang');
            $table->date('item_purchasedate')->comment('tanggal pembelian barang');
            $table->date('item_warranty')->comment('tanggal berlaku garansi');
            $table->macAddress('item_macaddress')->unique()->comment('mac address barang');
            $table->string('item_serialnumber', 100)->comment('serial number/barcode barang');
            $table->string('item_invoiceno', 50)->comment('no invoice barang');
            $table->double('item_price')->comment('harga barang');
            $table->string('item_description', 200)->comment('keterangan barang');
            $table->bigInteger('supplier_id')->comment('FK id supplier');
            $table->bigInteger('category_id')->comment('Fk id kategori');
            $table->bigInteger('operator_id')->comment('FK id operator');
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
        Schema::dropIfExists('items');
    }
}
