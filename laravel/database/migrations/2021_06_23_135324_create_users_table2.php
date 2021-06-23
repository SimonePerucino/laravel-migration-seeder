<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacchetti', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome-pacchetto');
            $table->integer('prezzo');
            $table->string("descrizione");
            $table->string('password');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacchetti');
    }
}
