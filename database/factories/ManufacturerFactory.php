<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Manufacturer>
 */
class ManufacturerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'mf_name' => $this->faker->name(),
        ];
    }
}
// 
// 'description' => $this->faker->paragraph(),
//             'model' => $this->faker->name(),
//             'produced_on' => now(),
//             'image' => 'hinh'.rand(1,5).'.jpg',
//             'manufacturer_id'=>rand(1,10),