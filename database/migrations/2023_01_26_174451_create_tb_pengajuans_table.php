<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPengajuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pengajuans', function (Blueprint $table) {
            $table->id();
            $table->string('kd_pengajuan');
            $table->string('nama_aset');
            $table->integer('qty');
            $table->enum('status', ['Pending', 'Tidak Disetujui'])->default('Pending');
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
        Schema::dropIfExists('tb_pengajuans');
    }
}
