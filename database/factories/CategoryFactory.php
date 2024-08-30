<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Hubungan antara kategori dan warna
        $categoryColors = [
            'Web Design' => 'red',
            'UI & UX' => 'blue',
            'Graphic Design' => 'green',
            'Mobile App Development' => 'purple',
            'Software Engineering' => 'yellow'
        ];

        // Pilih kategori secara acak
        $selectedCategory = $this->faker->randomElement(array_keys($categoryColors));

        // Ambil warna yang sesuai
        $selectedColor = $categoryColors[$selectedCategory];
        
        return [
            'name' => $selectedCategory,
            'slug' => Str::slug($this->faker->sentence(rand(1, 2), false)),
            'description' => $this->faker->paragraph(),
            'color' => $selectedColor,
        ];
    }
}
