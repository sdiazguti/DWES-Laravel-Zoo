<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cuidador>
 */
class CuidadorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $nombre=$this->faker->name;
        return [
           'nombre' => $nombre,
            'slug' => Str::slug($nombre),
            'id_titulacion1' => rand(1,10),
            'id_titulacion2' => rand(11,20)
        ];
    }
}
