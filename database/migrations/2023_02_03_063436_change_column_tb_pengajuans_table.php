<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnTbPengajuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("tb_pengajuans", function (Blueprint $table) {
            $table->integer("harga")->default(0)->after("qty");
            $table->string("kd_pengajuan")->unique()->change();
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
            $table->dropColumn("harga");
            $table->dropIndex(["kd_pengajuan"]);
        });
    }
}
