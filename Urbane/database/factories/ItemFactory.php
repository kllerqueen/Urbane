<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => mt_rand(1, count(Category::all())),
            'item_name' => fake()->words(2, true),
            'item_desc' => fake()->paragraphs(5, true),
            'item_price' => fake()->randomNumber(5, true),
            'qty' => fake()->randomNumber(2, false)
        ];
    }
}
