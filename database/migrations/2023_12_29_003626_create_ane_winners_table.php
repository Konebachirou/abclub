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
        Schema::create('ane_winners', function (Blueprint $table) {
            $table->id();
            $table->string('team_name');
            $table->string('team_picture');
            $table->date('year');
            $table->text('description');
            $table->integer('rating');
            $table->boolean('status')->default(true);
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ane_winners');
    }
};
