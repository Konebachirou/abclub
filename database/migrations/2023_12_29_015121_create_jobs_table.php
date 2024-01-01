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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('job_title');
            $table->string('job_link');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->enum('type', ['FREELANCE', 'CDI', 'CDD', 'Alternance', 'Stage', 'Intérime']);
            $table->string('location');
            $table->string('domain');
            $table->text('description');
            $table->text('content');
            $table->foreignId('pole_id')->nullable()->constrained();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
