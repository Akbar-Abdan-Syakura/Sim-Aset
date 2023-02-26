<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnKriteriaIdOnCategoryAset extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("categories", function (Blueprint $table)
        {
            $table->unsignedBigInteger("kriteria_id")->after("umur_ekonomis_id")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("categories", function (Blueprint $table)
        {
            $table->dropColumn("kriteria_id");
        });
    }
}
