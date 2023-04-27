<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Dragon@test.com',
            'email' => 'Dragon@test.com',
            'password' => '$2y$10$jZaE73pBr3o7SJoazytDReJ4BHiBpiko.FT2r2QKkbqBx3zCZHD5q',
            'remember_token' => '457unoYwumyPxpTEAz53emKCcgLkIV7BdpN32PI8acgtFKew6vxiT2yKYTx9',
        ]);
    }
}
