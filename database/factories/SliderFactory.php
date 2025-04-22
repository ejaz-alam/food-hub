<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slider>
 */
class SliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => $this->faker->imageUrl(),
            'offer_tag' => "50%",
            'title' => $this->faker->word(),
            'sub_title' => $this->faker->sentence(),
            'short_description' => $this->faker->paragraph(2),
            'redirection_link' => $this->faker->url(),
            'status' => $this->faker->randomElement([0, 1]),
            'sort_order' => $this->faker->numberBetween(0, 100)
        ];
    }
}
