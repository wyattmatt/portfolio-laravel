<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skill>
 */
class SkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = [
            'Programming' => ['PHP', 'JavaScript', 'Python', 'Java', 'C++', 'Ruby', 'Go', 'TypeScript'],
            'Frontend' => ['React', 'Vue.js', 'Angular', 'Tailwind CSS', 'Bootstrap', 'Sass'],
            'Backend' => ['Laravel', 'Node.js', 'Django', 'Spring Boot', 'Express.js'],
            'Database' => ['MySQL', 'PostgreSQL', 'MongoDB', 'Redis', 'Oracle'],
            'DevOps' => ['Docker', 'Kubernetes', 'AWS', 'Azure', 'CI/CD', 'Jenkins'],
            'Tools' => ['Git', 'VS Code', 'Postman', 'Figma', 'Jira'],
        ];

        $category = fake()->randomElement(array_keys($categories));
        $name = fake()->randomElement($categories[$category]);

        return [
            'name' => $name,
            'category' => $category,
            'proficiency_level' => fake()->numberBetween(50, 100),
            'icon' => null,
            'order' => fake()->numberBetween(0, 100),
        ];
    }
}
