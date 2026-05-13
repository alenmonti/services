<?php

namespace Database\Factories;

use App\Models\Professional;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProfessionalFactory extends Factory
{
    protected $model = Professional::class;

    public function definition()
    {
        $name = $this->faker->name();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'bio' => $this->faker->paragraph(),
            'contact' => $this->faker->phoneNumber(),
        ];
    }
}
