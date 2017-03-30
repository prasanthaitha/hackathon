<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnappInstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unapp__insts', function (Blueprint $table) {
            $table->increments('unid');
            $table->timestamps();
            $table->string('name');
            $table->string('locality')->nullable();
            $table->string('city');
            $table->integer('pincode')->nullable();
            $table->string('state');         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unapp__insts');
    }
}
