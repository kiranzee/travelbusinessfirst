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
        Schema::create('top_things_to_dos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('image_seo')->nullable();
            $table->string('short_description')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->decimal('rating', 3, 1)->nullable();
            $table->string('Long_description')->nullable();
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
        Schema::dropIfExists('top_things_to_dos');
    }
};
