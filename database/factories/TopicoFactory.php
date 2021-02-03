<?php

namespace Database\Factories;

use App\Models\Topico;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class TopicoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Topico::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence(),
            'corpo' => $this->faker->paragraph(2),
            'user_id' => User::factory(),
        ];
    }
}
