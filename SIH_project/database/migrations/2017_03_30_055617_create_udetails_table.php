<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('udetails', function (Blueprint $table) {
            Schema::enableForeignKeyConstraints();
            $table->integer('uid')->unsigned();
            $table->string('type');
            $table->string('aicte_id')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('locality')->nullable();
            $table->integer('pincode');
            $table->string('city');
            $table->string('state');

            $table->primary(['uid']);

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
        Schema::dropIfExists('udetails');
    }
}
