<?php

namespace Database\Factories;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Student::class;
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'stream'=>$this->faker->domainName(),
            'project_id'=>$this->faker->unique(true)->numberBetween(1,20)
        ];
    }
}
