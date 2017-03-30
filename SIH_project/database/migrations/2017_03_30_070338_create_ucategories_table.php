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
            $table->string('u_category');
            $table->integer('uid')->unsigned();

            $table->primary(['u_category', 'uid']);

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
