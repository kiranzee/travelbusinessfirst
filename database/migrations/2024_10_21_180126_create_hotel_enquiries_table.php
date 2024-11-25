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
        Schema::create('hotel_enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('destination');
            $table->date('checkin');
            $table->date('checkout');
            $table->integer('noofnightstay');
            $table->string('starhotel');
            $table->string('Roomtype');
            $table->integer('adultcount');
            $table->integer('childcount');
            $table->integer('infantcount');
            $table->string('noofrooms');
            $table->string('customer_name');
            $table->integer('customer_phone');
            $table->string('customer_email');
            $table->string('customer_comments');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_enquiries');
    }
};
