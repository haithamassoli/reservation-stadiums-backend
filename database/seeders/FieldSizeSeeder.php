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
        $fieldSizes = [
            '5x5',
            '7x7',
            '11x11',
        ];

        foreach ($fieldSizes as $size) {
            FieldSize::create([
                'size' => $size,
                'field_id' => 1,
                'price_per_hour' => 10,
            ]);
        }
    }
}
