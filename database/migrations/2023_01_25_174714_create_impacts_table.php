<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impacts', function (Blueprint $table) {
            $table->id();
            $table->string('title1');
            $table->integer('number1');
            $table->string('title2');
            $table->integer('number2');
            $table->string('title3');
            $table->integer('number3');
            $table->string('title4');
            $table->integer('number4');
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
        Schema::dropIfExists('impacts');
    }
};
