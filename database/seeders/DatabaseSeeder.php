<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\State;
use App\Models\Classes;
use App\Models\Division;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Standard;
use App\Models\UserRole;
use Illuminate\Database\Seeder;
use Database\Seeders\BookSeeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\RoleSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // // THIS IS FOR SEEDER

        $this->call([
            BookSeeder::class
        ]);


        // // --------------------------------------------------------------
        // // FACTORY THIS IS FOR

        Classes::factory()->count(50)->create();
        User::factory()->count(50)->create();
        State::factory()->count(50)->create();
        Standard::factory()->count(50)->create();
        Division::factory()->count(50)->create();

        // // ---------------------------------------------------------------------
        $this->call([
            PostSeeder::class
        ]);

        $this->call([
            RoleSeeder::class
        ]);

        UserRole::factory()->count(50)->create();
    }
}
