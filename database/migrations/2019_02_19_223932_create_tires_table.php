<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tires', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name', 128);
            $table->string('slug', 128)->unique();
            $table->string('excerpt')->nullable();
            $table->string('brand')->nullable();
            $table->string('data')->nullable();
            $table->string('file', 128)->nullable();
            $table->enum('category', ['CAMION', 'AGRICOLA']);

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
        Schema::dropIfExists('tires');
    }
}
