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
            'field_size_id' => 1,
            'day_of_week' => 0,
            'is_closed' => false,
            'times' => json_encode([
                ['start' => '16:00', 'end' => '24:00'],
                ['start' => '00:00', 'end' => '03:00'],
            ]),
        ]);
        Availability::create([
            'field_size_id' => 1,
            'day_of_week' => 1,
            'is_closed' => false,
            'times' => json_encode([
                ['start' => '16:00', 'end' => '24:00'],
                ['start' => '00:00', 'end' => '03:00'],
            ]),
        ]);
        Availability::create([
            'field_size_id' => 1,
            'day_of_week' => 2,
            'is_closed' => false,
            'times' => json_encode([
                ['start' => '16:00', 'end' => '24:00'],
                ['start' => '00:00', 'end' => '03:00'],
            ]),
        ]);
        Availability::create([
            'field_size_id' => 1,
            'day_of_week' => 3,
            'is_closed' => false,
            'times' => json_encode([
                ['start' => '16:00', 'end' => '24:00'],
                ['start' => '00:00', 'end' => '03:00'],
            ]),
        ]);
        Availability::create([
            'field_size_id' => 1,
            'day_of_week' => 4,
            'is_closed' => false,
            'times' => json_encode([
                ['start' => '16:00', 'end' => '24:00'],
                ['start' => '00:00', 'end' => '03:00'],
            ]),
        ]);
        Availability::create([
            'field_size_id' => 1,
            'day_of_week' => 5,
            'is_closed' => false,
            'times' => json_encode([
                ['start' => '16:00', 'end' => '24:00'],
                ['start' => '00:00', 'end' => '03:00'],
            ]),
        ]);
        Availability::create([
            'field_size_id' => 1,
            'day_of_week' => 6,
            'is_closed' => false,
            'times' => json_encode([
                ['start' => '16:00', 'end' => '24:00'],
                ['start' => '00:00', 'end' => '03:00'],
            ]),
        ]);
    }
}
