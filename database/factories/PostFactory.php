<?php

namespace Database\Factories;

use App\Models\Category; //

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    public function definition(): array
    {
        // Ambil ID kategori yang sudah ada secara acak
        $categoryIds = Category::pluck('id')->toArray();
        // Fallback: buat kategori baru jika belum ada
        $categoryId = !empty($categoryIds) ? fake()->randomElement($categoryIds) : Category::factory()->create()->id;

        return [
            'category_id' => $categoryId, // Tambahkan foreign key
            'title' => fake()->sentence(),
            'content' => fake()->paragraph(4),
        ];
    }
}
