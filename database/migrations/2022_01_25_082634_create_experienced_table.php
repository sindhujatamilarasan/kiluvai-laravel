<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experienced', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('Current_Company_Name');
            $table->string('email');
            $table->string('date_from');
            $table->string('location');
            $table->string('phone');
            $table->string('currentctc');
            $table->string('expctc');
            $table->string('noticeperiod');
            $table->string('exp');
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
        Schema::dropIfExists('experienced');
    }
}
