<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Immeuble;

class CreateImmeublesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immeubles', function (Blueprint $table) 
        {    
            $table->increments('id');
            $table->string('ville');
            $table->string('commune');
            $table->string('quartier');
            $table->string('avenue');
            $table->string('numero');
            $table->string('type_usage');
            $table->integer('nombre_pieces');
            $table->float('superficie');
            $table->integer('montant_garantie');
            $table->integer('montant_loyer');
            $table->string('image')->nullable();
            $table->string('description'); 
            $table->string('verified')->default(Immeuble::UNVERIFIED_IMMEUBLE);
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
        Schema::dropIfExists('immeubles');
    }
}
