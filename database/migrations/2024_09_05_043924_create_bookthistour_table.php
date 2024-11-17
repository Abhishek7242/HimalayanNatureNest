<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookthistourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookthistour', function (Blueprint $table) {
            $table->id('tour_id');
           $table->string('tourTitle');
$table->string('name');
$table->string('email');
$table->string('number');
$table->integer('adult');
$table->integer('child');
$table->date('date');
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
        Schema::dropIfExists('bookthistour');
    }
}
