<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Topico;
use App\Models\Resposta;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)
        //         ->has(
        //             Topico::factory()
        //             ->count(10)
        //         )
        //         ->create();

        // // $user = User::factory()->create();

        Topico::factory()
                ->count(50)
                // ->for(User::factory()->create())
                ->has(Resposta::factory()->count(rand(5, 10)), 'respostas')
                ->create();

        // Resposta::factory()->count(10)->create();
    }
}
