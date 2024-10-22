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
        Schema::create('best_of_activities', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('image_seo');
            $table->string('title');
            $table->decimal('price', 8, 2)->nullable();
            $table->decimal('rating', 3, 1)->nullable();
            $table->integer('rating_count')->default(0);;
            $table->string('Long_description')->nullable();
            $table->boolean('cancellation');
            $table->string('package_heading');
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
        Schema::dropIfExists('best_of_activities');
    }
};
