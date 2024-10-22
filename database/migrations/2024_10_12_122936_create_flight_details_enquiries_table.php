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
        Schema::create('flight_details_enquiries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('flight_enquiry_id');  // Foreign key must be unsignedBigInteger
        
            $table->string('from');
            $table->string('to');
            $table->date('departure_date');
            $table->date('return_date');
            $table->timestamps();
        
            // Adding the foreign key constraint
            $table->foreign('flight_enquiry_id')
                  ->references('id')
                  ->on('flight_enquiries')
                  ->onDelete('cascade');
        });
        
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flight_details_enquiries');
    }
};
