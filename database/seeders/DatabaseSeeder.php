<?php

namespace Database\Seeders;

use App\Models\post;
use App\Models\user;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::factory(1)->create();
        Post::factory(80)->create();
    }
}
