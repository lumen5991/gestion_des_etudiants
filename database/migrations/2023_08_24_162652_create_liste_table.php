<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liste', function (Blueprint $table) {
            $table->id();
            $table->string ('nom')->nullable(false);
            $table->string ('prenoms')->nullable(false);
            $table->date ('date_de_naissance')->nullable(false);
            $table->longText ('hobbies')->nullable(false);
            $table->string ('specialite')->nullable(false);
            $table->longText ('bio')->nullable(false);
            $table->string ('photo')->nullable(false);
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
        Schema::dropIfExists('liste');
    }
}
