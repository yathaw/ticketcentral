<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('cover');
            $table->string('status');
            $table->year('year');
            $table->string('language');
            $table->string('duration');
            $table->longText('overview')->nullable();
            $table->longText('trailer')->nullable();
            $table->longText('gallery')->nullable();
            $table->longText('video')->nullable();

            $table->foreignId('type_id')
                    ->references('id')
                    ->on('types')
                    ->onDelete('cascade');

            $table->softDeletes();
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
        Schema::dropIfExists('movies');
    }
}
