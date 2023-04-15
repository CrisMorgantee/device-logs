<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DeviceLogs>
 */
class DeviceLogsFactory extends Factory
{
    /**
       * Get a new Faker instance.
       *
       * @return \Faker\Generator
       */
    public function withFaker()
    {
        return \Faker\Factory::create('pt_BR');
    }
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'machine_name' => fake()->domainName(),
          'session' => fake()->md5(),
          'patrimony' => fake()->randomNumber(6),
          'location' => fake()->address(),
          'start_session_at' => fake()->date(),
          'end_session_at' => fake()->date(),
        ];
    }
}
