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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('lastName', 50)->nullable(false); //varchar(50)
            $table->string('firstName', 50)->nullable(false); //varchar(5)
            $table->string('MI', 5)->nullable(false); //varchar(5)
            $table->string('course', 50)->nullable(false); //varchar(50)
            $table->integer('yearlevel')->nullable(false); //int(2)
            $table->string('user_level', 15)->nullable(); //varchar(15)
            $table->string('status', 15)->nullable(); //varchar(15)
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
        Schema::dropIfExists('students');
    }
};
