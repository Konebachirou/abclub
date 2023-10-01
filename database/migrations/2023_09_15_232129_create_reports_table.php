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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('illustration');
            $table->string('gallery')->nullable();
            $table->string('caption');
            $table->boolean('status')->default(true);
            $table->date('date');
            $table->unsignedBigInteger('pole_id');
            $table->foreign('pole_id')->references('id')->on('poles')->onDelete('cascade');
            $table->boolean('is_report');
            $table->boolean('is_action');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
