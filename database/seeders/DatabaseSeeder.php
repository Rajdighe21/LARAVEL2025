<?php

namespace Database\Seeders;

use App\Models\Classes;
use App\Models\Division;
use App\Models\Standard;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\State;
use Illuminate\Database\Seeder;
use Database\Seeders\BookSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // THIS IS FOR SEEDER

        // $this->call([
        //     BookSeeder::class
        // ]);


        // --------------------------------------------------------------
        // FACTORY THIS IS FOR

        //Classes::factory()->count(60)->create();
        // User::factory()->count(60)->create();
        // State::factory()->count(60)->create();
        // Standard::factory()->count(60)->create();

        Division::factory()->count(60)->create();
    }
}
