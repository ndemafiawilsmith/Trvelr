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
        Schema::create('country_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->constrained('country')->onDelete('cascade');
            $table->string('previewURL');
            $table->string('imageURL')->nullable();
            $table->string('tags');
            $table->string('status')->nullable();
            $table->string('type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('country_images');
    }
};
