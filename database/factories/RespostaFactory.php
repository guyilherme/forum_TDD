<?php

namespace Database\Factories;

use App\Models\Resposta;
use App\Models\User;
use App\Models\Topico;

use Illuminate\Database\Eloquent\Factories\Factory;

class RespostaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Resposta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'corpo' => $this->faker->paragraph(1),
            'user_id' => User::factory(),
            
        ];
    }
}
