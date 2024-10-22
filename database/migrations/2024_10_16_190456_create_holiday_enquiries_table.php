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
        Schema::create('holiday_enquiries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('best_of_activity_id');
            $table->date('holiday_date');
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('customer_phone');
            $table->text('customer_comments')->nullable();
            $table->boolean('latest_offers')->default(0);
            $table->timestamps();

            // Adding the foreign key constraint
            $table->foreign('best_of_activity_id')
                  ->references('id')
                  ->on('best_of_activities')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('holiday_enquiries');
    }
};
