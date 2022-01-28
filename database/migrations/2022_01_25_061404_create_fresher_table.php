<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFresherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fresher', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('Graduation');
            $table->string('email');
            $table->string('pg');
            $table->string('location');
            $table->string('phone');
            $table->string('lang');
            $table->string('file');
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
        Schema::dropIfExists('fresher');
    }
}
