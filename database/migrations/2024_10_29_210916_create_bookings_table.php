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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('field_size_id')->constrained()->onDelete('cascade');
            $table->foreignId('field_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->date('date');
            $table->time('start');
            $table->time('end');
            $table->integer('total_price');
            $table->enum('status', ['pending', 'approved', 'rejected', 'cancelled'])->default('pending');
            $table->dateTime('cancellation_time')->nullable();
            $table->decimal('cancellation_fee', 5, 2)->default(0);
            $table->text('notes')->nullable();
            $table->integer('discount')->default(0);
            $table->enum('payment_method', ['cash', 'card', 'paypal'])->default('cash');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
