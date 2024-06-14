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
        Schema::create('country_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->constrained('country')->onDelete('cascade');
            $table->text('description');
            $table->string('name');
            $table->string('capital_city');
            $table->string('official_languages');
            $table->string('currency');
            $table->bigInteger('population');
            $table->string('time_zones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('country_details');
    }
};
