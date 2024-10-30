<?php

namespace Database\Seeders;

use App\Models\Academy;
use Illuminate\Database\Seeder;

class AcademySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Academy::create([
            'city_id' => 1,
            'name' => 'Academy 1',
            'address' => 'Address 1',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'images' => json_encode(['https://placehold.co/600x400', 'https://placehold.co/600x400']),
            'price' => 10,
            'status' => 'active',
            'description' => 'Description 1',
            'phone' => 'Phone 1',
            'period' => 'Period 1',
            'category' => 'Category 1',
            'age' => 'Age 1',
            'expire_at' => '2021-01-01',
        ]);
        Academy::create([
            'city_id' => 1,
            'name' => 'Academy 2',
            'address' => 'Address 2',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'images' => json_encode(['https://placehold.co/600x400', 'https://placehold.co/600x400']),
            'price' => 10,
            'status' => 'active',
            'description' => 'Description 1',
            'phone' => 'Phone 1',
            'period' => 'Period 1',
            'category' => 'Category 1',
            'age' => 'Age 1',
            'expire_at' => '2021-01-01',
        ]);
        Academy::create([
            'city_id' => 1,
            'name' => 'Academy 3',
            'address' => 'Address 3',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'images' => json_encode(['https://placehold.co/600x400', 'https://placehold.co/600x400']),
            'price' => 10,
            'status' => 'active',
            'description' => 'Description 1',
            'phone' => 'Phone 1',
            'period' => 'Period 1',
            'category' => 'Category 1',
            'age' => 'Age 1',
            'expire_at' => '2021-01-01',
        ]);
    }
}
