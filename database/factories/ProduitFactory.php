<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom_produit' => $this->faker->words(2, true),
            'description' => $this->faker->words(15, true),
            'type' => 'unité',
            'stock' => 100,
            'image' => 'default.png'
        ];
    }
}
