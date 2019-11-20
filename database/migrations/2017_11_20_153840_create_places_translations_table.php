<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places_translations', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->string('lang', 2);
            $table->string('description', 500);
            $table->timestamps();
            $table->primary(['id', 'lang']);
            $table->foreign('id')->references('id')->on('places')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('places_translations');
    }
}
