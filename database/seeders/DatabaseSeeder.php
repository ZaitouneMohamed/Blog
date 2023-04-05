<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(rolesSeeder::class);
        $this->call(UsersSeeder::class);
        \App\Models\Tags::factory(10)->create();
        \App\Models\Categorie::factory(10)->create();
        \App\Models\Posts::factory(50)->create();
        \App\Models\Comments::factory(50)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
