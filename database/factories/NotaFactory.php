<?php

namespace Database\Factories;

use App\Models\nota;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\nota>
 */
class NotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = nota::class;

    public function definition()
    {
        return [
            'titulo' => $this->faker->text(60),
            'contenido' => $this->faker->text(1500),
            'fecha' => now(),
            'imagen' => 'https://images.vexels.com/media/users/3/204881/isolated/lists/efdc3831d94459b2e871b227643512ee-icono-de-trazo-de-lapiz-de-notas.png',
            'id_user' => 1

        ];
    }
}
