<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colleges', function (Blueprint $table) {
            Schema::enableForeignKeyConstraints();
            $table->increments('cid');
            $table->text('cname');
            $table->text('state');
            $table->text('city');
            $table->integer('uid')->unsigned()->nullable();
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
        Schema::dropIfExists('colleges');
    }
}
