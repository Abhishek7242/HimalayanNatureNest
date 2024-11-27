<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_details', function (Blueprint $table) {
            $table->id('tourDetails_id');
            $table->string('tourTitle');
            $table->string('tourPackageTitle');
            $table->string('tourPackageImage');
            $table->string('tourPackageDuration');
            $table->string('tourPackageRoute');
            $table->string('tourPackageStartPoint');
            $table->string('tourPackageEndPoint');
            $table->string('tourCoverImage');
            $table->string('packageTags');
            $table->integer('offerPackage')->default(0); // 0 for false, 1 for true

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
        Schema::dropIfExists('tour_details');
    }
}
