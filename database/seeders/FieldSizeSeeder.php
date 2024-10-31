<?php

namespace Database\Seeders;

use App\Models\FieldSize;
use Illuminate\Database\Seeder;

class FieldSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FieldSize::create([
            'size' => '5x5',
            'field_id' => 1,
            'price_per_hour' => 10,
            'discount' => 10,
            'expires_at' => now()->addDays(7),
        ]);
        FieldSize::create([
            'size' => '7x7',
            'field_id' => 1,
            'price_per_hour' => 10,
        ]);
        FieldSize::create([
            'size' => '11x11',
            'field_id' => 1,
            'price_per_hour' => 10,
        ]);
    }
}
