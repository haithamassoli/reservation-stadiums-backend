<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'field_id' => 1,
            'user_id' => 1,
            'name' => 'John Doe',
            'rating' => 5,
        ]);
        Review::create([
            'field_id' => 2,
            'user_id' => 1,
            'name' => 'Hashem Doe',
            'rating' => 2,
        ]);
        Review::create([
            'field_id' => 3,
            'user_id' => 1,
            'name' => 'Haitham Assoli',
            'rating' => 4,
        ]);
    }
}
