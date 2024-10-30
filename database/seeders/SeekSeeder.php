<?php

namespace Database\Seeders;

use App\Models\Seek;
use Illuminate\Database\Seeder;

class SeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Seek::create([
            'city_id' => 1,
            'user_id' => 1,
            'field_id' => 1,
            'title' => 'Seek 1',
            'description' => 'Description 1',
            'status' => 'active',
            'expires_at' => now()->addDays(7),
        ]);
        Seek::create([
            'city_id' => 1,
            'user_id' => 1,
            'field_id' => 1,
            'title' => 'Seek 2',
            'description' => 'Description 2',
            'status' => 'active',
            'expires_at' => now()->addDays(7),
        ]);
        Seek::create([
            'city_id' => 1,
            'user_id' => 1,
            'field_id' => 1,
            'title' => 'Seek 3',
            'description' => 'Description 3',
            'status' => 'active',
            'expires_at' => now()->addDays(7),
        ]);
    }
}
