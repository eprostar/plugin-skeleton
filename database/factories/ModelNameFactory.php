<?php

namespace VendorName\Skeleton\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ModelNameFactory extends Factory
{
    protected $model = ModelName::class;

    public function definition()
    {
        return [
            'name' => fake()->name,
        ];
    }
}
