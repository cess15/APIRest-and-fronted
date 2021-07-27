<?php

namespace Database\Factories;

use App\Models\Resevation;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResevationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Resevation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' => function() {
                return Student::factory()->create()->id;
            },
            'guest_id' => function () {

            }
        ];
    }
}
