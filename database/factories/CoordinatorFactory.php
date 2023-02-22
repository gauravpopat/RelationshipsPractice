<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Coordinator;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coordinator>
 */
class CoordinatorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Coordinator::class;
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->firstNameFemale(),
            'student_id'=>$this->faker->unique(true)->numberBetween(1,20)
        ];
    }
}
