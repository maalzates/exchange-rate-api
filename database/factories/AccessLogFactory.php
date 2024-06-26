<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AccessLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'access_time' => $this->faker->dateTimeThisYear()->format('Y-m-d H:i:s'),
            'ip_address' => $this->faker->ipv4,
        ];
    }
}
