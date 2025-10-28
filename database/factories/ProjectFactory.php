<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $projectTypes = [
            'E-commerce Platform',
            'Social Media App',
            'Portfolio Website',
            'Task Management System',
            'Booking Platform',
            'Blog CMS',
            'Real-time Chat Application',
            'API Service',
            'Mobile App Backend',
            'Analytics Dashboard',
        ];

        $techStacks = [
            ['Laravel', 'Vue.js', 'MySQL', 'Tailwind CSS'],
            ['React', 'Node.js', 'MongoDB', 'Express'],
            ['PHP', 'JavaScript', 'PostgreSQL', 'Bootstrap'],
            ['Laravel', 'React', 'Redis', 'Docker'],
            ['Vue.js', 'Firebase', 'Tailwind CSS'],
        ];

        $startDate = fake()->dateTimeBetween('-2 years', '-6 months');

        return [
            'title' => fake()->randomElement($projectTypes),
            'description' => fake()->paragraphs(2, true),
            'image' => null,
            'url' => fake()->boolean(70) ? fake()->url() : null,
            'github_url' => fake()->boolean(60) ? 'https://github.com/' . fake()->userName() . '/' . fake()->slug(2) : null,
            'technologies' => fake()->randomElement($techStacks),
            'start_date' => $startDate,
            'end_date' => fake()->boolean(70) ? fake()->dateTimeBetween($startDate, 'now') : null,
            'is_featured' => fake()->boolean(30),
            'order' => fake()->numberBetween(0, 100),
        ];
    }
}
