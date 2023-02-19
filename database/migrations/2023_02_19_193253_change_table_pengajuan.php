<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTablePengajuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("tb_pengajuans", function (Blueprint $table) {
            $table->dropColumn("qty");
            $table->dropColumn("nama_aset");
            $table->unsignedBigInteger("category_id")->after("user_id");
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
            $table->string("nama_aset")->after("user_id");
            $table->integer("qty")->after("nama_aset");
            $table->dropColumn("category_id");
        });
    }
}
