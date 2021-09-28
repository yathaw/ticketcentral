<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->longText('link');
            $table->longText('address');
            $table->longText('map');
            $table->longText('gallery')->nullable();

            $table->foreignId('city_id')
                    ->references('id')
                    ->on('cities')
                    ->onDelete('cascade');

            $table->foreignId('cinema_id')
                    ->references('id')
                    ->on('cinemas')
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
        Schema::dropIfExists('branches');
    }
}
