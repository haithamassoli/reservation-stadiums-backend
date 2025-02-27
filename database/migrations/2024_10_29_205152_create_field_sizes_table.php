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
        Schema::create('field_sizes', function (Blueprint $table) {
            $table->id();
            $table->string('size');
            $table->foreignId('field_id')->constrained()->onDelete('cascade');
            $table->decimal('price_per_hour', 5, 2);
            $table->integer('discount')->nullable();
            $table->dateTime('expires_at')->nullable();
            $table->enum('discount_type', ['percentage', 'fixed'])->default('percentage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('field_sizes');
    }
};
