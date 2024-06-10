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
        Schema::create('itineraries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign Key to users table
            $table->string('title');
            $table->foreignId('destination')->constrained('country')->onDelete('cascade'); // Foreign Key to country table
            $table->decimal('budget', 10, 2); // Assuming budget is a decimal value
            $table->date('start_date');
            $table->date('end_date');
            $table->json('activities'); // JSON column for activities
            $table->json('travel_companions'); // JSON column for travel companions
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itineraries');
    }
};
