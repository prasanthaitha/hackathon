<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('uruns', function (Blueprint $table) {
            Schema::enableForeignKeyConstraints();
            $table->integer('coid')->unsigned();
            $table->foreign('coid')->references('coid')->on('courses')->onDelete('cascade');
            $table->integer('uid')->unsigned();
            $table->foreign('uid')->references('uid')->on('universities')->onDelete('cascade');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->enum('mode',['Regular','Distance','Regular and Distance']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uruns');
    }
}
