<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbCabangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_cabangs', function (Blueprint $table) {
            $table->id();
            $table->string('kd_cabang');
            $table->string('nama_cbng');
            $table->text('alamat');
            $table->enum('penempatan', [
                'Kantor',
                'Lorong Bawah',
                'Mitra',
                'Parkir Belakang',
                'Parkir Depan',
                'Ruang Atas Pantry',
                'Ruang Dapur',
                'Ruang Dirut',
                'Ruang Gudang',
                'Ruang IT',
                'Ruang Keuangan',
                'Ruang Loby',
                'Ruang Lorong Atas',
                'Ruang Luar',
                'Ruang Mushola',
                'Ruang Operasi dan Pemasaran',
                'Ruang Pantry',
                'Ruang Rapat',
                'Ruang Remunerasi dan Layanan',
                'Ruang SDM dan Sarana',
                'Ruang Server',
                'Ruang Setper dan Legal',
                'Ruang Tamu',
                'Ruang Umum dan SDM'
            ]);
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
        Schema::dropIfExists('tb_cabangs');
    }
}
