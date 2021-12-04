<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slug' => $this->faker->slug(),
            'title' => $this->faker->sentence(),
            'post' => $this->faker->realText(600, 5),
            'keywords' => $this->faker->word().",".$this->faker->word().",".$this->faker->word(),
            'vote_up' => $this->faker->numberBetween(1, 500),
            'vote_down' => $this->faker->numberBetween(1, 200),



        
        ];
    }
}
