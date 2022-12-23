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
        Schema::create('leden', function (Blueprint $table) {
            $table->id();
            $table->string('Voornaam');
            $table->string('Achternaam');
            $table->date('Gebdatum');
            $table->integer('Sterkte');
            $table->string('Verkortenaam');
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
        //
    }
};
