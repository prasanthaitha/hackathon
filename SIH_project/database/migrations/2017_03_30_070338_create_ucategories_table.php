<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ucategories', function (Blueprint $table) {
            Schema::enableForeignKeyConstraints();
            $table->enum('category',['Engineering','Medical','Law','Arts','Commerce','Management','Sciences','Design']);
            
            $table->integer('uid')->unsigned();

            $table->primary(['category', 'uid']);

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
        Schema::dropIfExists('ucategories');
    }
}
