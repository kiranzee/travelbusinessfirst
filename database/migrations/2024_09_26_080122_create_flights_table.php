<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('source');
            $table->string('destination');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('airline');
            $table->string('logo');
            $table->string('route');
            $table->string('route2');
            $table->string('route3');
            $table->integer('adult_fare');
            $table->integer('status');
            $table->integer('from_departure');
            $table->integer('from_arrival');
            $table->integer('from_duration');
            $table->integer('to_departure');
            $table->integer('to_arrival');
            $table->integer('to_duration');
            $table->integer('class');
            $table->integer('refundable');
            $table->integer('meal');
            $table->integer('weight');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
