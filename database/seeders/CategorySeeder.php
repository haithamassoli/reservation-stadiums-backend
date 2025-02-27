<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'قدم',
        ]);
        Category::create([
            'name' => 'سلة',
        ]);
        Category::create([
            'name' => 'طائرة',
        ]);
        Category::create([
            'name' => 'تنس',
        ]);
    }
}
