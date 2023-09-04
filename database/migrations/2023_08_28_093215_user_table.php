<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string ('first_name');
            $table->string ('last_name');
            $table->text ('password');
            $table->string ('email')->nullable(false)->unique();
            $table->date ('birthday')->nullable();
            $table->string ('avatar')->nullable();
            $table->dateTime ('email_verifief_at')->nullable();
            $table->boolean ('email_verified')->nullable();
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
}
