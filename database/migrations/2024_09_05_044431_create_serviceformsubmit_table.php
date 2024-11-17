<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceformsubmitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serviceformsubmit', function (Blueprint $table) {
            $table->id('service_id');
          $table->string('serviceTitle', 225);
$table->string('name', 225);
$table->string('email', 225);
$table->integer('number');
$table->string('date', 225);
$table->string('city', 225);
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
        Schema::dropIfExists('serviceformsubmit');
    }
}
