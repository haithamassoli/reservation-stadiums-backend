<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()
            ->create([
                'name' => 'Admin',
                'role' => UserRole::ADMIN,
                'phone' => '0775331416',
                'uuid' => 'a5d1672b-fe1a-418a-bfe9-ce93cbcc74cf'
            ]);

        $this->call([
            CitySeeder::class,
            CategorySeeder::class,
            FieldSeeder::class,
            FieldSizeSeeder::class,
            BookingSeeder::class,
            DiscountCodeSeeder::class,
            AdvertisementSeeder::class,
            TournamentSeeder::class,
            ReviewSeeder::class,
            AcademySeeder::class,
            SeekSeeder::class,
            AvailabilitySeeder::class,
            SpecialAvailabilitySeeder::class,
        ]);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
