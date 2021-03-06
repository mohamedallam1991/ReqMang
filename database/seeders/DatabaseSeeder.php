<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create(
            ['name' => 'Admin',
            'email' => 'admin@test.com'],
        );
        \App\Models\User::factory()->create(
            ['name' => 'Utilisateur',
            'email' => 'utilisateur@test.com'],
        );
        \App\Models\User::factory(5)->create();
        \App\Models\User::factory(5)->admin()->create();
        \App\Models\Projet::factory(10)->create();
    }
}
