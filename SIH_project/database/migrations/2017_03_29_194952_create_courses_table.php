<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('coid');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('branch');
            $table->string('degree');
            $table->enum('level',['UG','PG','Diploma']);
            $table->integer('duration')->nullable();
            $table->enum('category',['Engineering','Medical','Law','Arts','Commerce','Management','Sciences','Design']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
