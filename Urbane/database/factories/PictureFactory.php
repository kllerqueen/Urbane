<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Item;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Picture>
 */
class PictureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'picture_url' => 'https://images.pexels.com/photos/15534950/pexels-photo-15534950/free-photo-of-standing-man-holding-hands-on-hips.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'item_id' => mt_rand(1, count(Item::all()))
        ];
    }
}
