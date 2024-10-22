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
        Schema::create('popularflightdestinations', function (Blueprint $table) {
            $table->string('region');
            $table->id();
            $table->String('title');
            $table->string('image')->nullable();
            $table->string('image_seo')->nullable();
            $table->decimal('first_class_price', 8, 2);
            $table->decimal('business_class_price', 8, 2);
            $table->decimal('premier_economy_price', 8, 2);
            $table->decimal('economy_price', 8, 2);
            $table->enum('status', ['active', 'inactive']);
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Add user_id with a foreign key constraint
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('popularflightdestinations');
    }
};
