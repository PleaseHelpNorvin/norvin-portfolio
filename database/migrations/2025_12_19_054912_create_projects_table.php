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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');          // Project name
            $table->string('slug')->unique(); // URL-friendly slug
            $table->text('description');     // Project description
            $table->string('tech_stack')->nullable(); // Technologies used
            $table->string('demo_url')->nullable();  // Optional embedded demo URL
            $table->string('project_tier')->default('basic');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
