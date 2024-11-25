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
        Schema::create('track_prices', function (Blueprint $table) {
            $table->id();
            $table->string('source');
            $table->string('destination');
            $table->date('departure_date');
            $table->date('return_date')->nullable();
            $table->integer('customer_phone');
            $table->string('customer_email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('track_prices');
    }
};
