<?php

namespace Database\Seeders;
use \App\Models\Produit;
use \App\Models\Couleur;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Couleur::factory(5)->create();

        Produit::factory(10)->create();
    }
}
