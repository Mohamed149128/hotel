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
        Schema::create('kamers', function (Blueprint $table) {
            $table->id();
            $table->string('soortkamer');
            $table->integer('kamernummer');
            $table->integer('kameropervlakte');
            $table->tinyInteger('kamerminibar');
            $table->string('aantalpersonen');





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
        Schema::dropIfExists('kamers');
    }
};
