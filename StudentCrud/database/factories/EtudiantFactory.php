<?php

namespace Database\Factories;

use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EtudiantFactory extends Factory
{


    // @var string

    protected $model = Etudiant::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return
            [
                'nom' => $this->faker->lastName(),
                'prenom' => $this->faker->firstName(),
                'classe_Id' => rand(1, 7)
            ];
    }
}
