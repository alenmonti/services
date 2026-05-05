<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\Professional;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition()
    {
        return [
            'professional_id' => Professional::factory(),
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 10, 200),
            'image' => null,
            'visible' => true,
        ];
    }
}
