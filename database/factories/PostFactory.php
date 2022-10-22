<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(3, 10)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            // 'body' => '<p>'.implode ('<p></p>',  $this->faker->paragraphs(mt_rand(10, 15))).'</p>',
            'content' => collect($this->faker->paragraphs(mt_rand(10, 15)))
                ->map(fn ($p) => "<p>$p</p>")
                ->implode(''),
            'published_at' => $this->faker->dateTimeBetween('-1 month'),
            'category_id' => rand(1, 3),
            'user_id' => rand(1, 12)
        ];
    }
}
