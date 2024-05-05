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
        Schema::create('teams', function (Blueprint $table) {
            $table->softDeletes();
            $table->id();
            $table->foreignId('league_id')->constrained('leagues')->nullable();
            $table->string('name')->unique();
            $table->string('city');
            $table->string('country');
            $table->integer('founded')->nullable();
            $table->string('stadium_name')->nullable();
            $table->integer('stadium_capacity')->nullable();
            $table->string('logo', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
