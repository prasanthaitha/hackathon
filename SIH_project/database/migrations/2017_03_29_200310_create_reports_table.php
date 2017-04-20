<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use DB;

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
            $table->enum('category',['Engineering','Medical','Law','Arts','Commerce','Management','Sciences','Design']);
            $table->string('college_name');
            $table->string('course_name')->nullable();
            $table->string('branch')->nullable();
            $table->integer('status')->default(0);
            $table->string('message')->nullable();
            $table->string('ticket')->unique();
            $table->integer('id')->unsigned()->nullable();
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps()->default(\DB::raw('CURRENT_TIMESTAMP'));
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
