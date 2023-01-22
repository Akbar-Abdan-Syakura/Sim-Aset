<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAsetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_asets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cabang_id');
            $table->foreignId('umur_ekonomis_id');
            $table->foreignId('kondisi_id');
            $table->string('kd_aset');
            $table->string('nama');
            $table->date('tgl_perolehan');
            $table->text('spek');
            $table->integer('qty');
            $table->integer('usia_aset');
            $table->decimal('harga');
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
        Schema::dropIfExists('tb_asets');
    }
}
