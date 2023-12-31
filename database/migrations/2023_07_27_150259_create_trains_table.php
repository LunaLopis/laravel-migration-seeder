<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('codice_treno', 10);
            $table->string('azienda', 40);
            $table->string('stazione_partenza', 60);
            $table->string('stazione_arrivo', 60);
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->boolean('in_orario')->default(false);
            $table->boolean('cancellato')->default(false);
            $table->integer('numero_carrozze');
            $table->date('data_partenza');
            $table->date('data_arrivo');            
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
        Schema::dropIfExists('trains');
    }
};
