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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('illustration');
            $table->text('description');
            $table->boolean('is_active');
            $table->boolean('is_paid')->default(false);
            $table->integer('Number_of_place');
            $table->date('start_date');
            $table->date('end_date');
            $table->time('start_times');
            $table->time('end_times');
            $table->string('payment_link')->nullable();
            $table->foreignId('pole_id')->nullable()->constrained();
            $table->string('lieu');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
