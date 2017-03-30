<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coldetails', function (Blueprint $table) {
            Schema::enableForeignKeyConstraints();
            $table->integer('cid')->unsigned();
            $table->string('type');
            $table->string('aicte_id')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('locality')->nullable();
            $table->integer('pincode');
            $table->string('city');
            $table->string('state');

            $table->primary(['cid']);

            $table->foreign('cid')->references('cid')->on('colleges')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coldetails');
    }
}
