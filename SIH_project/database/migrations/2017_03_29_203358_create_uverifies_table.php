<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUverifiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uverifies', function (Blueprint $table) {
            $table->string('ministry');
            $table->integer('uid')->unsigned();
            $table->primary(['ministry','uid']);
            $table->foreign('uid')->references('uid')->on('universities')->onDelete('cascade');

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uverifies');
    }
}
