<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        $this->call([
            CitySeeder::class,
            CategorySeeder::class,
            FieldSeeder::class,
            FieldSizeSeeder::class,
            BookingSeeder::class,
            DiscountCodeSeeder::class,
            FieldTimeSeeder::class,
            AdvertisementSeeder::class,
            TournamentSeeder::class,
            ReviewSeeder::class,
            AcademySeeder::class,
        ]);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
