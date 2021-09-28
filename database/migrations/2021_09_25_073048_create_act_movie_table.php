<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('act_movie', function (Blueprint $table) {
            $table->id();
            $table->string('character');

            $table->foreignId('category_id')
                    ->references('id')
                    ->on('categories')
                    ->onDelete('cascade');

            $table->foreignId('act_id')
                    ->references('id')
                    ->on('acts')
                    ->onDelete('cascade');

            $table->foreignId('movie_id')
                    ->references('id')
                    ->on('movies')
                    ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('act_movie');
    }
}
