<?php

namespace Database\Seeders;

use App\Models\Step;
use Illuminate\Database\Seeder;

class StepsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $steps = [
            [
                'id' => '1',
                'recipe_id' => '1',
                'order' => '1',
                'instruction' => 'To do do do',
            ],
            [
                'id' => '2',
                'recipe_id' => '1',
                'order' => '1',
                'instruction' => 'To do do do',
            ],
            [
                'id' => '3',
                'recipe_id' => '1',
                'order' => '1',
                'instruction' => 'To do do do',
            ],
            [
                'id' => '4',
                'recipe_id' => '1',
                'order' => '1',
                'instruction' => 'To do do do',
            ],
            [
                'id' => '5',
                'recipe_id' => '1',
                'order' => '1',
                'instruction' => 'To do do do',
            ],
            [
                'id' => '6',
                'recipe_id' => '1',
                'order' => '1',
                'instruction' => 'To do do do',
            ],
        ];

        foreach ($steps as $step) {
            Step::create($step);
        }
    }
}
