<?php

namespace Database\Seeders;

use App\Models\FieldTime;
use Illuminate\Database\Seeder;

class FieldTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FieldTime::create([
            'field_id' => 1,
            'time' => 'ساعة',
        ]);
        FieldTime::create([
            'field_id' => 1,
            'time' => 'ساعة ونص',
        ]);
        FieldTime::create([
            'field_id' => 1,
            'time' => 'ساعتين',
        ]);
    }
}
