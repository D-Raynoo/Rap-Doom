<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Post;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title'=> $this->faker->sentence(),
            'description'=> $this->faker->paragraph(),
            'user_id'=> User::all()->random()->id
        ];
    }
}
