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
        Schema::create('flight_destinations', function (Blueprint $table) {
            $table->id();
            $table->string('region');
            $table->string('title');
            $table->string('image');
            $table->string('image_seo')->nullable();
            $table->string('banner_image');
            $table->string('banner_image_seo')->nullable();
            $table->decimal('first_class_price', 8, 2)->nullable();
            $table->decimal('business_class_price', 8, 2)->nullable();
            $table->decimal('premier_economy_price', 8, 2)->nullable();
            $table->decimal('economy_price', 8, 2)->nullable();
            $table->string('heading');
            $table->string('link_name');
            $table->string('airline_image1');
            $table->string('airline_image2');
            $table->string('airline_image3');
            $table->string('airline_image4');
            $table->string('airline_image5');
            $table->string('airline_from1');
            $table->string('airline_to1');
            $table->string('airline_from2');
            $table->string('airline_to2');
            $table->string('airline_from3');
            $table->string('airline_to3');
            $table->string('airline_from4');
            $table->string('airline_to4');
            $table->string('airline_from5');
            $table->string('airline_to5');
            $table->decimal('airline1_price', 8, 2)->nullable();
            $table->decimal('airline2_price', 8, 2)->nullable();
            $table->decimal('airline3_price', 8, 2)->nullable();
            $table->decimal('airline4_price', 8, 2)->nullable();
            $table->decimal('airline5_price', 8, 2)->nullable();
            $table->string('long_description');
            $table->enum('status', ['active', 'inactive']);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flight_destinations');
    }
};
