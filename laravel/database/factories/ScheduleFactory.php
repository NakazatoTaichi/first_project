<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'going_out' => $this->faker->realText(4),
                'dinner' => $this->faker->realText(4),
                'departure_time' => time('H_i_s'),
                'arrival_time' => time('H_i_s'),
                'memo' => $this->faker->realText(30),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null,
        ];
    }
}
