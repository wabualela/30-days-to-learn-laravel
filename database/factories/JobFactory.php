<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [ 
            'title'       => $this->faker->jobTitle(),
            'salary'      => '$' . $this->faker->numberBetween(30000, 100000) . ' per year',
            'employer_id' => \App\Models\Employer::factory(),
        ];
    }
}
