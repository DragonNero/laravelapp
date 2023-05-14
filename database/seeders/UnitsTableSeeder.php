<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        Unit::truncate();

        $units = [
            [
                'id' => 1,
                'name' => 'g',
            ],
            [
                'id' => 2,
                'name' => 'cL',
            ],
            [
                'id' => 3,
                'name' => 'mL',
            ],
            [
                'id' => 4,
                'name' => 'teaspoon',
            ],
            [
                'id' => 5,
                'name' => 'tablespoon',
            ],
            [
                'id' => 6,
                'name' => 'cup',
            ],
            [
                'id' => 7,
                'name' => 'pinch',
            ],
            [
                'id' => 8,
                'name' => 'piece',
            ],
            [
                'id' => 9,
                'name' => 'splash',
            ],
            [
                'id' => 10,
                'name' => 'dash',
            ],
            [
                'id' => 11,
                'name' => 'slice',
            ],
            [
                'id' => 12,
                'name' => 'cube',
            ],
            [
                'id' => 13,
                'name' => 'bunch',
            ],
            [
                'id' => 14,
                'name' => 'package',
            ],
        ];

        foreach ($units as $unit) {
            Unit::create($unit);
        }

        Schema::enableForeignKeyConstraints();
    }
}
