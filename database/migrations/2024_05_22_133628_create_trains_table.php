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
            $table->string('name', 100);
            $table->string('name', 50);
            $table->string('name', 50);
            $table->time('sunrise', precision: 0);
            $table->time('sunrise', precision: 0);
            $table->integer('votes');
            $table->integer('votes');
            $table->string('name', 30);
            $table->string('name', 30);
            $table->timestamps()->nullable();
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



// Ogni treno dovrà avere:
// Azienda
// Stazione di partenza
// Stazione di arrivo
// Orario di partenza
// Orario di arrivo
// Codice Treno
// Numero Carrozze
// In orario
// Cancellato