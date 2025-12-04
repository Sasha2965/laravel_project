<?php

namespace Database\Factories;

use App\Enums\ServiceTypeEnum;
use Illuminate\Database\Eloquent\Factories\Factory;


class ServiceFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->words(3, true),
            'description' => fake()->paragraph(),
            'price' => fake()->numberBetween(1000, 10000),
            'type' => fake()->randomElement(ServiceTypeEnum::cases()),
        ];
    }
}
