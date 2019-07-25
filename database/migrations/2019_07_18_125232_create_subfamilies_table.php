<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubfamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subfamilies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->json('text')->nullable();
            $table->json('image')->nullable();
            $table->string('order')->nullable();
            $table->unsignedBigInteger('family_id')->nullable();
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
        Schema::dropIfExists('subfamilies');
    }
}
