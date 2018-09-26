<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBailleurIdToImmeublesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('immeubles', function (Blueprint $table) {
            $table->integer('bailleur_id')->unsigned()->nullable();
            $table->foreign('bailleur_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('immeubles', function (Blueprint $table) {
            $table->dropForeign('immeubles_bailleur_id_foreign');
            $table->dropColumn('bailleur_id');
        });
    }
}
