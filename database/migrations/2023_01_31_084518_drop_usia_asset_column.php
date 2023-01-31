<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropUsiaAssetColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("tb_asets", function (Blueprint $table) {
            $table->dropColumn("usia_aset");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("tb_asets", function (Blueprint $table) {
            $table->integer("usia_aset")->default(0);
        });
    }
}
