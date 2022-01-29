<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('package_id')->constrained();
            $table->string('payment_price')->nullable();
            $table->string('advance')->nullable();
            $table->string('balance')->nullable();
            $table->longText('transaction')->nullable();
            $table->longText('option')->nullable();
            $table->date('start')->nullable();
            $table->date('end')->nullable();
            $table->string('remain')->nullable();
            $table->enum('status',['paid','unpaid'])->default('unpaid');
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
        Schema::dropIfExists('subscriptions');
    }
}
