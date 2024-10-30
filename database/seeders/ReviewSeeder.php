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
            'review' => 'Great field, I love it!',
            'rating' => 5,
        ]);
        Review::create([
            'field_id' => 1,
            'user_id' => 2,
            'name' => 'Hashem Doe',
            'review' => 'Great field, I love it!',
            'rating' => 2,
        ]);
        Review::create([
            'field_id' => 1,
            'user_id' => 3,
            'name' => 'Haitham Assoli',
            'review' => 'Great field, I love it!',
            'rating' => 4,
        ]);
    }
}
