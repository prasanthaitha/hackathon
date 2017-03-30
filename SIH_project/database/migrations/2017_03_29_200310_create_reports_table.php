<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            Schema::enableForeignKeyConstraints();
            $table->increments('rid');
            $table->string('locality')->nullable();
            $table->string('city');
            $table->integer('pincode')->length(6)->nullable();
            $table->string('state');
            $table->string('degree')->nullable();
            $table->string('category');
            $table->string('college_name');
            $table->string('course_name')->nullable();
            $table->string('branch')->nullable;
            $table->string('message');
            $table->string('ticket')->unique();
            $table->integer('pid')->unsigned();
            $table->foreign('pid')->references('pid')->on('people')->onDelete('cascade');
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
        Schema::dropIfExists('reports');
    }
}
