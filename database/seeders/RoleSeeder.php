<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           $roles = collect([
            [
                'role_name' => 'Administrator',

            ],
            [
                'role_name' => 'Author',

            ],
            [
                'role_name' => 'Student',

            ],
            [
                'role_name' => 'Teacher',
            ],
            [
                'role_name' => 'Editor',
            ],
            [
                'role_name' => 'Guest',
            ],
            [
                'role_name' => 'Librarian',
            ],
            [
                'role_name' => 'Parent',
            ],
            [
                'role_name' => 'User',
            ],
        ]);




        $roles->each(function ($role) {
            Role::insert($role);
        });
    }
}
