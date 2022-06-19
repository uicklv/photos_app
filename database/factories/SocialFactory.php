<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SocialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'instagram' => rand(0, 1) === 1 ? $this->faker->url() : NULL,
            'facebook' => rand(0, 1) === 1 ? $this->faker->url() : NULL,
            'twitter' => rand(0, 1) === 1 ? $this->faker->url() : NULL,
            'website' => rand(0, 1) === 1 ? $this->faker->url() : NULL,
        ];
    }
}
