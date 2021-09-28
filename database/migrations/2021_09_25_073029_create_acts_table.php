<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('status')->nullable();
            $table->longText('photo')->nullable();
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('pob')->nullable();
            $table->string('site')->nullable();
            $table->longText('bio')->nullable();
            $table->longText('gallery')->nullable();

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
        Schema::dropIfExists('acts');
    }
}
