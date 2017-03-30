<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cruns', function (Blueprint $table) {
            Schema::enableForeignKeyConstraints();
            $table->integer('cid')->unsigned();
            $table->integer('coid')->unsigned();
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('mode',['regular','distance']);
            
            $table->primary(['cid', 'coid']);

            
            $table->foreign('cid')->references('cid')->on('colleges')->onDelete('cascade');

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
        Schema::dropIfExists('cruns');
    }
}
