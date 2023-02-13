<?php

namespace Database\Factories;

use App\Models\libary;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\libary>
 */
class libaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user' => $this -> faker->name(),
            'task' => $this -> faker->word()
        ];
    }
}
