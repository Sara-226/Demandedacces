<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utils', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 50);
            $table->string('prenom', 50);
            $table->string('mail', 50);
            $table->string('statut')->default('passif');
            $table->string('password');
            $table->string('role', 50);
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
        Schema::dropIfExists('utils');
    }
}
