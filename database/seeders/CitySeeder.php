<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    City::create([
      'name' => 'عمان',
    ]);
    City::create([
      'name' => 'عجلون',
    ]);
    City::create([
      'name' => 'اربد',
    ]);
    City::create([
      'name' => 'الزرقاء',
    ]);
    City::create([
      'name' => 'جرش',
    ]);
    City::create([
      'name' => 'الكرك',
    ]);
    City::create([
      'name' => 'معان',
    ]);
    City::create([
      'name' => 'الغور',
    ]);
    City::create([
      'name' => 'العقبة',
    ]);
  }
}
