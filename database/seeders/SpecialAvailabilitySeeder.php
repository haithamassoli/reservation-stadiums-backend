<?php

namespace Database\Seeders;

use App\Models\SpecialAvailability;
use Illuminate\Database\Seeder;

class SpecialAvailabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SpecialAvailability::create([
            'field_size_id' => 1,
            'special_date' => '2021-12-25',
            'open_time' => '3:00',
            'close_time' => '4:00',
            'is_closed' => false,
        ]);
        SpecialAvailability::create([
            'field_size_id' => 1,
            'special_date' => '2021-12-25',
            'open_time' => '04:00',
            'close_time' => '05:00',
            'is_closed' => false,
        ]);
    }
}
