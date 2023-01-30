<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnEnumOnTbPengajuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("tb_pengajuans", function (Blueprint $table) {
            $table->dropColumn("status");
        });
        Schema::table("tb_pengajuans", function (Blueprint $table) {
            $table->enum("status", ["pending", "tolak", "setuju"])->after("qty");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("tb_pengajuans", function (Blueprint $table) {
            $table->dropColumn("status");
        });
        Schema::table("tb_pengajuans", function (Blueprint $table) {
            $table->enum("status", ["Pending", "Tidak Disetujui"]);
        });
    }
}
