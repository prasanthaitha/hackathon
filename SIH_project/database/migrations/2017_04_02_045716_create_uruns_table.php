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
             $table->integer('uid')->unsigned();
            $table->integer('coid')->unsigned();
            $table->date('start_date')->nullable();

            $table->date('end_date')->nullable();
            $table->enum('mode',['Regular','Distance','Regular and Distance']);
            
            $table->primary(['uid', 'coid']);

            
            $table->foreign('uid')->references('uid')->on('universities')->onDelete('cascade');

            $table->foreign('coid')->references('coid')->on('courses')->onDelete('cascade');
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
