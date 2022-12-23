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
        Schema::create('wedstrijden', function (Blueprint $table) {
            $table->id();
            $table->datetime('Datum');
            $table->year('Competitie');
            $table->integer('SpelerWij1')->nullable();
            $table->integer('SpelerWij2')->nullable();
            $table->integer('SpelerWij3')->nullable();
            $table->integer('SpelerZij1')->nullable();
            $table->integer('SpelerZij2')->nullable();
            $table->integer('SpelerZij3')->nullable();
            $table->integer('ScoreWij')->nullable();
            $table->integer('ScoreZij')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('wedstrijden');
    }
};
