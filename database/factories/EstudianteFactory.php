<?php

namespace Database\Factories;

use App\Models\Estudiante;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstudianteFactory extends Factory
{
    protected $model = Estudiante:: class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'identidad' => $this->faker -> numerify('####-####-#####'),
            'cuenta' => $this->faker -> numerify('############'),                
            'nombre'=> $this->faker -> name(),
            'apellido'=> $this->faker -> name(),
            'fecha_nacimiento' => $this->faker -> dateTimeBetween ('-40 years'),
            'nota_final' => $this->faker -> numberBetween(0,100)
        ];
    }
}
