<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colcategories', function (Blueprint $table) {
            Schema::enableForeignKeyConstraints();
            $table->string('c_category');
            $table->integer('cid')->unsigned();

            $table->primary(['c_category', 'cid']);

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
        Schema::dropIfExists('colcategories');
    }
}
