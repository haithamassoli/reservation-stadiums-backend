<?php

namespace Database\Seeders;

use App\Models\Tournament;
use Illuminate\Database\Seeder;

class TournamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tournament::create([
            'title' => 'Tournament 1',
            'description' => 'Description 1',
            'period' => '2024-10-30 03:03:16',
            'status' => 'active',
            'images' => json_encode(['https://placehold.co/600x400', 'https://placehold.co/600x400']),
            'phone' => '1234567890',
            'category' => 'category 1',
            'age' => 'age 1',
            'expire_at' => '2024-10-30 03:03:16',
            'address' => 'address 1',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'city_id' => 1,
            'field_id' => 1,
            'user_id' => 1,
        ]);
        Tournament::create([
            'title' => 'Tournament 2',
            'description' => 'Description 2',
            'period' => '2024-10-30 03:03:16',
            'status' => 'active',
            'images' => json_encode(['https://placehold.co/600x400', 'https://placehold.co/600x400']),
            'phone' => '1234567890',
            'category' => 'category 1',
            'age' => 'age 1',
            'expire_at' => '2024-10-30 03:03:16',
            'address' => 'address 1',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'city_id' => 1,
            'field_id' => 1,
            'user_id' => 1,
        ]);
        Tournament::create([
            'title' => 'Tournament 3',
            'description' => 'Description 3',
            'period' => '2024-10-30 03:03:16',
            'status' => 'active',
            'images' => json_encode(['https://placehold.co/600x400', 'https://placehold.co/600x400']),
            'phone' => '1234567890',
            'category' => 'category 1',
            'age' => 'age 1',
            'expire_at' => '2024-10-30 03:03:16',
            'address' => 'address 1',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'city_id' => 1,
            'field_id' => 1,
            'user_id' => 1,
        ]);
    }
}
