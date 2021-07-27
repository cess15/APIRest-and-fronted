<?php

namespace Database\Factories;

use App\Models\Career;
use App\Models\Semester;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name();

        return [
            'career_id' => function() {
                return Career::factory()->create()->id;
            },
            'semester_id' => function() {
                return Semester::factory()->create()->id;
            },
            'identification' => $this->faker->numerify('##########'),
            'name' => $name,
            'lastname' => $this->faker->lastName(),
            'mothers_lastname' => $this->faker->lastName()
        ];
    }
}
