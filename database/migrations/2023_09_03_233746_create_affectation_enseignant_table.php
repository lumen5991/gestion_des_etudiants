<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffectationEnseignantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affectation_enseignant', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cours_id');
            $table->unsignedBigInteger('enseignant_id');
            $table->foreign('cours_id')->references('id')->on('cours');
            $table->foreign('enseignant_id')->references('id')->on('enseignants');
            $table->unique(['enseignant_id', 'cours_id']);
            $table->softDeletes();
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
        Schema::dropIfExists('affectation_enseignant');
    }
}
