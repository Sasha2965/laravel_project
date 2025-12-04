<?php

namespace Database\Factories;

use App\Enums\OrderStatusEnum;
use App\Enums\Payments\PaymentMethodEnum;
use App\Enums\Payments\PaymentStatusEnum;
use App\Models\Order;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' => Order::factory(),
            'status' => fake()->randomElement(PaymentStatusEnum::cases()),
            'method' => fake()->randomElement(PaymentMethodEnum::cases()),
        ];
    }
}
