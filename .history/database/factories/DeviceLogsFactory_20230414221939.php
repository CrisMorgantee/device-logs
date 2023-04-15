<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DeviceLogs>
 */
class DeviceLogsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'machine_name' => fake()->text(10),
          'session' => fake()->md5(),
          'patrimony' => fake()->randomNumber(6),
          'location' => fake()->word(5),
          'start_session_at' => fake()->date(),
          'end_session_at' => fake()->date(),
        ];
    }
}
