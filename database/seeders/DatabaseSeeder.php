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
                'email' => 'admin@admin.com',
                'password' => bcrypt(UserRole::ADMIN),
                'role' => UserRole::ADMIN,
                'email_verified_at' => now(),
            ]);
        User::factory(10)->create();

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
