<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startDate = fake()->dateTimeBetween('-5 years', '-1 year');
        $isCurrent = fake()->boolean(30);

        return [
            'title' => fake()->randomElement([
                'Senior Software Engineer',
                'Full Stack Developer',
                'Frontend Developer',
                'Backend Developer',
                'DevOps Engineer',
                'Software Architect',
                'Lead Developer',
                'Technical Lead',
            ]),
            'company' => fake()->company(),
            'description' => fake()->paragraphs(3, true),
            'start_date' => $startDate,
            'end_date' => $isCurrent ? null : fake()->dateTimeBetween($startDate, 'now'),
            'is_current' => $isCurrent,
            'location' => fake()->city() . ', ' . fake()->stateAbbr(),
            'order' => fake()->numberBetween(0, 100),
        ];
    }
}
