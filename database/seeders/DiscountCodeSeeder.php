<?php

namespace Database\Seeders;

use App\Models\DiscountCode;
use Illuminate\Database\Seeder;

class DiscountCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DiscountCode::create([
            'code' => 'DISCOUNT10',
            'discount' => 10,
            'expires_at' => '2026-01-01',
            'discount_type' => 'percentage',
            'max_uses' => 100,
        ]);
    }
}
