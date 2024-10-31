<?php

namespace Database\Seeders;

use App\Models\Availability;
use Illuminate\Database\Seeder;

class AvailabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Availability::create([
            'field_id' => 1,
            'day_of_week' => 0,
            'open_time' => '08:00',
            'close_time' => '22:00',
            'is_closed' => false,
        ]);
        Availability::create([
            'field_id' => 1,
            'day_of_week' => 1,
            'open_time' => '08:00',
            'close_time' => '22:00',
            'is_closed' => false,
        ]);
        Availability::create([
            'field_id' => 1,
            'day_of_week' => 2,
            'open_time' => '08:00',
            'close_time' => '22:00',
            'is_closed' => false,
        ]);
        Availability::create([
            'field_id' => 1,
            'day_of_week' => 3,
            'open_time' => '08:00',
            'close_time' => '22:00',
            'is_closed' => false,
        ]);
        Availability::create([
            'field_id' => 1,
            'day_of_week' => 4,
            'open_time' => '08:00',
            'close_time' => '22:00',
            'is_closed' => false,
        ]);
        Availability::create([
            'field_id' => 1,
            'day_of_week' => 5,
            'open_time' => '08:00',
            'close_time' => '22:00',
            'is_closed' => false,
        ]);
        Availability::create([
            'field_id' => 1,
            'day_of_week' => 6,
            'open_time' => '08:00',
            'close_time' => '22:00',
            'is_closed' => false,
        ]);
    }
}
