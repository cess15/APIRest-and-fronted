<?php

namespace Database\Factories;

use App\Models\Turn;
use Illuminate\Database\Eloquent\Factories\Factory;

class TurnFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Turn::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'days' => $this->faker->date('Y-m-d', now()),
            'hour' => $this->faker->time('H:i:s', now()),
        ];
    }
}
