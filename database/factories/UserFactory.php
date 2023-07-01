<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'family' => fake()->lastName(),
            'mobile' => fake()->numerify('###########'),
            'username' => Str::random(10),
            'password' => '$2y$10$QJtvF1qP/C5leGIyWXxjeeZJhA0rXe7xsglt0TFqaDlna0d4s5Uyq', // password
            'remember_token' => Str::random(10),
        ];
    }
}
