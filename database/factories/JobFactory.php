<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'title' => fake()->jobTitle,
            'salary' => fake()->randomElement(['$50000','$90000','$12000', '$34000']),
            'location' => 'Remote',
            'schedule' => 'Full time',
            'url' => fake()->url,
            'featured' => false,
            'employee_id' => Employee::factory(),
            
        ];
    }
}
