<?php

namespace Database\Factories;

use App\Enums\OrderStatusEnum;
use App\Enums\ServiceTypeEnum;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'service_id' => Service::factory(),
            'status' => fake()->randomElement(OrderStatusEnum::cases()),
            'total_price' => fake()->numberBetween(10000, 100000),
        ];
    }
}
