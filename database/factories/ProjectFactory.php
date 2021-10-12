<?php

namespace Database\Factories;

use App\Models\project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence($nbWords = 4, $variableNbWords = true),
            'description' => $this->faker->paragraphs($nb = 8, $asText = true),
            'date' => $this->faker->date(),
            'excerpt' => $this->faker->paragraph($nbSentences = 4, $variableNbSentences = true),
            'meta_description' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'meta_keywords' => implode(',', $this->faker->words($nb = 3, $asText = false)),
        ];
    }
}
