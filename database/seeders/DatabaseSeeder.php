<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this ->call(PostsTableSeeder::class);
        Post::factory(100)->create(
            ['body' => 'Overriding the body of our post']
        );
    }
}
