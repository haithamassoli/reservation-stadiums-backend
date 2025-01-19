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
        Schema::create('fields', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('city_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('address');
            $table->string('location');
            $table->string('discount')->nullable();
            $table->text('terms');
            $table->string('rating')->default('0,0');
            $table->json('images');
            $table->string('main_image');
            $table->integer('min_price')->default(0);
            $table->enum('status', ['active', 'inactive'])->default('inactive');
            $table->integer('order')->default(0);
            $table->text('tags')->nullable();
            $table->json('hours_type');
            $table->enum('payment_method', ['cash', 'card', 'paypal'])->default('cash');
            $table->string('enclosures')->nullable();
            $table->string('sports');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fields');
    }
};
