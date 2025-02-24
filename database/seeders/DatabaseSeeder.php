<?php

namespace Database\Seeders;

use App\Models\Chirp;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = User::find(1);
        $chirps = Chirp::factory()
                       ->count(20)
                       ->create([
                           'user_id' => $admin->id,
                       ]);

        $anon = User::factory()->create();
        $chirps = Chirp::factory()
                       ->count(50)
                       ->create([
                           'user_id' => $anon->id,
                       ]);
    }
}
