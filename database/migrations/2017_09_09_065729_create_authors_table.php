<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('email');
        });

        Schema::table('articles', function (Blueprint $table) {
            $table->integer('author_id')->unsigned()->default(1);
            $table->foreign('author_id')
                  ->references('id')
                  ->on('authors');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('authors');
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('author_id');
        });
    }
}
