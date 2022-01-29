<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('time',191);
            $table->longText('monday')->nullable();
            $table->longText('tuesday')->nullable();
            $table->longText('wednesday')->nullable();
            $table->longText('thursday')->nullable();
            $table->longText('friday')->nullable();
            $table->longText('saturday')->nullable();
            $table->longText('sunday')->nullable();
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
        Schema::dropIfExists('schedules');
    }
}
