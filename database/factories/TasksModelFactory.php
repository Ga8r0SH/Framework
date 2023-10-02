<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TasksModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "category_id" => rand(1, 10),
            "title" => $this->faker->title(),
            "description" => $this->faker->text(),
            'dueDate' => $this->faker->dateTimeBetween('+1 day', '+30 days')
        ];
    }
}
