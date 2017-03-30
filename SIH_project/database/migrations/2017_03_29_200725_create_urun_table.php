<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urun', function (Blueprint $table) {
            Schema::enableForeignKeyConstraints();
            $table->integer('coid')->unsigned();
            $table->foreign('coid')->references('coid')->on('courses')->onDelete('cascade');
            $table->integer('uid')->unsigned();
            $table->foreign('uid')->references('uid')->on('universities')->onDelete('cascade');
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('mode',['regular','distance']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('urun');
    }
}
