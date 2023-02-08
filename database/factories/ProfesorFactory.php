<?php

namespace Database\Factories;

use App\Models\Profesor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfesorFactory extends Factory
{
    protected $model = Profesor:: class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'identidad' => $this->faker -> numerify('####-####-#####'),               
            'nombre'=> $this->faker -> name(),
           'apellido'=> $this->faker -> name(), 
            'telefono' => $this->faker -> numerify('####-####') ,
            'fecha_contrato' => $this->faker -> dateTimeBetween ('-40 years'),
            'sueldo' => $this->faker -> numberBetween (0, 10000)
        ];
    }
}
