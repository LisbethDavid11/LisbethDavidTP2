<?php

namespace Database\Factories;

use App\Models\Asignatura;
use Illuminate\Database\Eloquent\Factories\Factory;

class AsignaturaFactory extends Factory
{
    protected $model = Asignatura:: class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo_asignatura' => $this->faker -> word(),      
            'requisito'=> $this->faker -> word()
        
        ];
    }
}
