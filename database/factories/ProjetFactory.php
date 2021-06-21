<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Projet;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Projet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory()->create()->id,
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            //
        ];
    }
}
