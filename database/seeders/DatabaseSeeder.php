<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Role::create(['name' => 'SuperAdmin']);
        Role::create(['name' => 'student']);
        Role::create(['name' => 'teacher']);

        \App\Models\User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@shikhi.test',
            'password' => bcrypt('123'),
        ])->assignRole('SuperAdmin');

        \App\Models\Course::factory(50)->create();
    }
}
