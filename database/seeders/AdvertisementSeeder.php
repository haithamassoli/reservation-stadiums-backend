<?php

namespace Database\Seeders;

use App\Models\Advertisement;
use Illuminate\Database\Seeder;

class AdvertisementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Advertisement::create(
            [
                'title' => 'Advertisement 1',
                'image' => 'https://placehold.co/600x400',
                'link' => 'https://haitham-assoli-portfolio.vercel.app/',
            ]
        );
        Advertisement::create(
            [
                'title' => 'Advertisement 2',
                'image' => 'https://placehold.co/600x400',
            ]
        );
        Advertisement::create(
            [
                'title' => 'Advertisement 3',
                'image' => 'https://placehold.co/600x400',
                'link' => 'https://haitham-assoli-portfolio.vercel.app/',
            ]
        );
    }
}
