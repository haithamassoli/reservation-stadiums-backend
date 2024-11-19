<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Booking::create([
            'user_id' => 1,
            'field_size_id' => 1,
            'field_id' => 1,
            'date' => now()->format('Y-m-d'),
            'start_time' => '20:00',
            'end_time' => '21:30',
            'status' => 'cancelled',
            'total_price' => 20,
            'cancellation_time' => null,
            'cancellation_fee' => 10,
            'notes' => 'This is a test booking',
            'field_name' => 'Field 1 - Small',
        ]);
        Booking::create([
            'user_id' => 1,
            'field_size_id' => 1,
            'field_id' => 1,
            'date' => now()->format('Y-m-d'),
            'start_time' => '20:00',
            'end_time' => '21:30',
            'status' => 'success',
            'total_price' => 20,
            'cancellation_time' => null,
            'notes' => 'This is a test booking',
            'discount' => "10%",
            'payment_method' => 'cash',
            'field_name' => 'Field 2 - 5x5',
        ]);
        Booking::create([
            'user_id' => 1,
            'field_size_id' => 1,
            'field_id' => 1,
            'date' => now()->format('Y-m-d'),
            'start_time' => '01:00',
            'end_time' => '11:30',
            'status' => 'success',
            'total_price' => 20,
            'cancellation_time' => null,
            'notes' => 'This is a test booking',
            'discount' => "10%",
            'payment_method' => 'cash',
            'field_name' => 'Field 2 - 5x5',
        ]);
    }
}
