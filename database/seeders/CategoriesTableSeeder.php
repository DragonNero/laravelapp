<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        Category::truncate();

        $categories = [
            [
                'id' => 1,
                'name' => 'APPETIZERS',
                'image_path' => 'APPETIZERS.jpg',
                'order' => 1,
            ],
            [
                'id' => 2,
                'name' => 'MAIN DISHES',
                'image_path' => 'MAIN_DISHES.jpg',
                'order' => 2,
            ],
            [
                'id' => 3,
                'name' => 'SIDE DISHES',
                'image_path' => 'SIDE_DISHES.jpg',
                'order' => 3,
            ],
            [
                'id' => 4,
                'name' => 'DESSERTS',
                'image_path' => 'DESSERTS.jpg',
                'order' => 4,
            ],
            [
                'id' => 5,
                'name' => 'COCKTAILS',
                'image_path' => 'COCKTAILS.jpg',
                'order' => 5,
            ],
            [
                'id' => 6,
                'name' => 'OTHERS',
                'image_path' => 'OTHERS.jpg',
                'order' => 6,
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        Schema::enableForeignKeyConstraints();
    }
}
