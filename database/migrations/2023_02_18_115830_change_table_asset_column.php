<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTableAssetColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_asets', function (Blueprint $table) {
            $table->dropColumn(['nama', 'spek', 'qty', 'umur_ekonomis_id']);
            $table->unsignedBigInteger("category_id")->after("kondisi_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_asets', function (Blueprint $table) {
            $table->string('nama');
            $table->text('spek');
            $table->integer('qty');
            $table->foreignId('umur_ekonomis_id');
            $table->dropColumn("category_id");
        });
    }
}
