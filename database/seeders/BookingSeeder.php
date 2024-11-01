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
            'date' => '2021-10-10',
            'start_time' => '10:00',
            'end_time' => '12:00',
            'status' => 'cancelled',
            'total_price' => 20,
            'cancellation_time' => null,
            'cancellation_fee' => 10,
            'notes' => 'This is a test booking',
        ]);
        Booking::create([
            'user_id' => 1,
            'field_size_id' => 1,
            'field_id' => 1,
            'date' => '2021-10-10',
            'start_time' => '10:00',
            'end_time' => '12:00',
            'status' => 'success',
            'total_price' => 20,
            'cancellation_time' => null,
            'notes' => 'This is a test booking',
            'discount' => "10%",
            'payment_method' => 'cash',
        ]);
    }
}
