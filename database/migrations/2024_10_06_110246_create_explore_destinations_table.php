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
        Schema::create('explore_destinations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('image_seo')->nullable();
            $table->decimal('price', 8, 2)->nullable();
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
        Schema::dropIfExists('explore_destinations');
    }
};
