<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\EmployeeVisit;
use App\Models\Enums\VisitType;

class EmployeeVisitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmployeeVisit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(VisitType::keys()),
            'date' => $this->faker->dateTimeBetween('-5 days', 'now')->format('Y-m-d'),
        ];
    }
}
