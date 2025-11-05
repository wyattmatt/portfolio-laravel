<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\Project;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $skills = $this->createSkills();

        Experience::factory(8)->create();

        $this->createProjectsWithSkills($skills);
    }

    /**
     * Create realistic skills organized by category.
     */
    private function createSkills(): array
    {
        $skillsData = [
            'Programming' => [
                ['name' => 'PHP', 'proficiency' => 95, 'icon' => 'fab fa-php'],
                ['name' => 'JavaScript', 'proficiency' => 90, 'icon' => 'fab fa-js'],
                ['name' => 'TypeScript', 'proficiency' => 85, 'icon' => 'fab fa-js'],
                ['name' => 'Python', 'proficiency' => 75, 'icon' => 'fab fa-python'],
                ['name' => 'Java', 'proficiency' => 70, 'icon' => 'fab fa-java'],
            ],
            'Frontend' => [
                ['name' => 'React', 'proficiency' => 90, 'icon' => 'fab fa-react'],
                ['name' => 'Vue.js', 'proficiency' => 88, 'icon' => 'fab fa-vuejs'],
                ['name' => 'Tailwind CSS', 'proficiency' => 92, 'icon' => null],
                ['name' => 'Bootstrap', 'proficiency' => 85, 'icon' => 'fab fa-bootstrap'],
                ['name' => 'HTML/CSS', 'proficiency' => 95, 'icon' => 'fab fa-html5'],
                ['name' => 'Alpine.js', 'proficiency' => 80, 'icon' => null],
            ],
            'Backend' => [
                ['name' => 'Laravel', 'proficiency' => 95, 'icon' => 'fab fa-laravel'],
                ['name' => 'Node.js', 'proficiency' => 85, 'icon' => 'fab fa-node'],
                ['name' => 'Express.js', 'proficiency' => 82, 'icon' => null],
                ['name' => 'Django', 'proficiency' => 70, 'icon' => null],
                ['name' => 'REST API', 'proficiency' => 93, 'icon' => null],
            ],
            'Database' => [
                ['name' => 'MySQL', 'proficiency' => 90, 'icon' => null],
                ['name' => 'PostgreSQL', 'proficiency' => 85, 'icon' => null],
                ['name' => 'MongoDB', 'proficiency' => 80, 'icon' => null],
                ['name' => 'Redis', 'proficiency' => 75, 'icon' => null],
            ],
            'DevOps' => [
                ['name' => 'Docker', 'proficiency' => 85, 'icon' => 'fab fa-docker'],
                ['name' => 'Git', 'proficiency' => 95, 'icon' => 'fab fa-git'],
                ['name' => 'GitHub Actions', 'proficiency' => 80, 'icon' => 'fab fa-github'],
                ['name' => 'AWS', 'proficiency' => 75, 'icon' => 'fab fa-aws'],
                ['name' => 'Linux', 'proficiency' => 88, 'icon' => 'fab fa-linux'],
            ],
            'Tools' => [
                ['name' => 'VS Code', 'proficiency' => 95, 'icon' => null],
                ['name' => 'Postman', 'proficiency' => 90, 'icon' => null],
                ['name' => 'Figma', 'proficiency' => 70, 'icon' => 'fab fa-figma'],
                ['name' => 'Jira', 'proficiency' => 80, 'icon' => null],
            ],
        ];

        $skills = [];
        $order = 0;

        foreach ($skillsData as $category => $categorySkills) {
            foreach ($categorySkills as $skillData) {
                $skills[] = Skill::create([
                    'name' => $skillData['name'],
                    'category' => $category,
                    'proficiency_level' => $skillData['proficiency'],
                    'icon' => $skillData['icon'],
                    'order' => $order++,
                ]);
            }
        }

        return $skills;
    }

    /**
     * Create projects with realistic skill associations.
     */
    private function createProjectsWithSkills(array $skills): void
    {
        $skillsByName = collect($skills)->keyBy('name');

        $projectTemplates = [
            [
                'title' => 'E-Commerce Platform',
                'description' => 'A full-featured online shopping platform with payment integration, inventory management, and admin dashboard. Supports multiple vendors and real-time order tracking.',
                'is_featured' => true,
                'skills' => [
                    ['name' => 'Laravel', 'proficiency' => 95, 'is_primary' => true],
                    ['name' => 'Vue.js', 'proficiency' => 90, 'is_primary' => true],
                    ['name' => 'MySQL', 'proficiency' => 85, 'is_primary' => false],
                    ['name' => 'Tailwind CSS', 'proficiency' => 88, 'is_primary' => false],
                    ['name' => 'Redis', 'proficiency' => 75, 'is_primary' => false],
                ],
            ],
            [
                'title' => 'Real-time Chat Application',
                'description' => 'WebSocket-based chat application with private messaging, group chats, file sharing, and typing indicators. Built for scalability and real-time performance.',
                'is_featured' => true,
                'skills' => [
                    ['name' => 'Node.js', 'proficiency' => 90, 'is_primary' => true],
                    ['name' => 'React', 'proficiency' => 88, 'is_primary' => true],
                    ['name' => 'MongoDB', 'proficiency' => 85, 'is_primary' => false],
                    ['name' => 'Redis', 'proficiency' => 80, 'is_primary' => false],
                    ['name' => 'Docker', 'proficiency' => 75, 'is_primary' => false],
                ],
            ],
            [
                'title' => 'Project Management System',
                'description' => 'Comprehensive project management tool with task tracking, team collaboration, time logging, and reporting features. Includes Gantt charts and Kanban boards.',
                'is_featured' => true,
                'skills' => [
                    ['name' => 'Laravel', 'proficiency' => 93, 'is_primary' => true],
                    ['name' => 'Alpine.js', 'proficiency' => 85, 'is_primary' => false],
                    ['name' => 'PostgreSQL', 'proficiency' => 88, 'is_primary' => true],
                    ['name' => 'Tailwind CSS', 'proficiency' => 90, 'is_primary' => false],
                    ['name' => 'REST API', 'proficiency' => 92, 'is_primary' => false],
                ],
            ],
            [
                'title' => 'Blog & CMS Platform',
                'description' => 'Modern content management system with markdown support, SEO optimization, media management, and multi-author support. Features a clean admin interface.',
                'is_featured' => false,
                'skills' => [
                    ['name' => 'Laravel', 'proficiency' => 90, 'is_primary' => true],
                    ['name' => 'Vue.js', 'proficiency' => 85, 'is_primary' => false],
                    ['name' => 'MySQL', 'proficiency' => 82, 'is_primary' => false],
                    ['name' => 'Bootstrap', 'proficiency' => 80, 'is_primary' => false],
                ],
            ],
            [
                'title' => 'Analytics Dashboard',
                'description' => 'Business intelligence dashboard with real-time data visualization, custom report generation, and export functionality. Processes large datasets efficiently.',
                'is_featured' => true,
                'skills' => [
                    ['name' => 'React', 'proficiency' => 92, 'is_primary' => true],
                    ['name' => 'TypeScript', 'proficiency' => 88, 'is_primary' => true],
                    ['name' => 'Node.js', 'proficiency' => 85, 'is_primary' => false],
                    ['name' => 'PostgreSQL', 'proficiency' => 87, 'is_primary' => false],
                    ['name' => 'Docker', 'proficiency' => 80, 'is_primary' => false],
                ],
            ],
            [
                'title' => 'Booking & Reservation System',
                'description' => 'Online booking platform for appointments and reservations with calendar integration, automated reminders, and payment processing.',
                'is_featured' => false,
                'skills' => [
                    ['name' => 'Laravel', 'proficiency' => 91, 'is_primary' => true],
                    ['name' => 'JavaScript', 'proficiency' => 85, 'is_primary' => false],
                    ['name' => 'MySQL', 'proficiency' => 83, 'is_primary' => false],
                    ['name' => 'Tailwind CSS', 'proficiency' => 87, 'is_primary' => false],
                ],
            ],
            [
                'title' => 'RESTful API Service',
                'description' => 'Robust API service with authentication, rate limiting, versioning, and comprehensive documentation. Designed for third-party integrations.',
                'is_featured' => false,
                'skills' => [
                    ['name' => 'Laravel', 'proficiency' => 94, 'is_primary' => true],
                    ['name' => 'REST API', 'proficiency' => 95, 'is_primary' => true],
                    ['name' => 'MySQL', 'proficiency' => 85, 'is_primary' => false],
                    ['name' => 'Redis', 'proficiency' => 78, 'is_primary' => false],
                    ['name' => 'Docker', 'proficiency' => 82, 'is_primary' => false],
                ],
            ],
            [
                'title' => 'Social Media Dashboard',
                'description' => 'Unified dashboard for managing multiple social media accounts with post scheduling, analytics tracking, and engagement monitoring.',
                'is_featured' => false,
                'skills' => [
                    ['name' => 'Vue.js', 'proficiency' => 89, 'is_primary' => true],
                    ['name' => 'Laravel', 'proficiency' => 87, 'is_primary' => true],
                    ['name' => 'MongoDB', 'proficiency' => 82, 'is_primary' => false],
                    ['name' => 'Tailwind CSS', 'proficiency' => 85, 'is_primary' => false],
                ],
            ],
            [
                'title' => 'Inventory Management System',
                'description' => 'Complete inventory tracking system with barcode scanning, stock alerts, supplier management, and reporting features.',
                'is_featured' => false,
                'skills' => [
                    ['name' => 'Laravel', 'proficiency' => 92, 'is_primary' => true],
                    ['name' => 'Alpine.js', 'proficiency' => 80, 'is_primary' => false],
                    ['name' => 'MySQL', 'proficiency' => 88, 'is_primary' => true],
                    ['name' => 'Bootstrap', 'proficiency' => 75, 'is_primary' => false],
                ],
            ],
            [
                'title' => 'Weather Forecast App',
                'description' => 'Beautiful weather application with location-based forecasts, interactive maps, and severe weather alerts. Mobile-responsive design.',
                'is_featured' => false,
                'skills' => [
                    ['name' => 'React', 'proficiency' => 87, 'is_primary' => true],
                    ['name' => 'JavaScript', 'proficiency' => 90, 'is_primary' => false],
                    ['name' => 'REST API', 'proficiency' => 85, 'is_primary' => false],
                    ['name' => 'Tailwind CSS', 'proficiency' => 88, 'is_primary' => false],
                ],
            ],
            [
                'title' => 'Task Management API',
                'description' => 'Lightweight API for task and todo management with team collaboration features. Includes webhooks and third-party integrations.',
                'is_featured' => false,
                'skills' => [
                    ['name' => 'Express.js', 'proficiency' => 88, 'is_primary' => true],
                    ['name' => 'Node.js', 'proficiency' => 90, 'is_primary' => true],
                    ['name' => 'MongoDB', 'proficiency' => 83, 'is_primary' => false],
                    ['name' => 'REST API', 'proficiency' => 91, 'is_primary' => false],
                ],
            ],
            [
                'title' => 'Portfolio Website Generator',
                'description' => 'SaaS platform for creating professional portfolio websites with customizable templates, drag-and-drop builder, and SEO tools.',
                'is_featured' => true,
                'skills' => [
                    ['name' => 'Laravel', 'proficiency' => 93, 'is_primary' => true],
                    ['name' => 'Vue.js', 'proficiency' => 91, 'is_primary' => true],
                    ['name' => 'MySQL', 'proficiency' => 86, 'is_primary' => false],
                    ['name' => 'Tailwind CSS', 'proficiency' => 92, 'is_primary' => false],
                    ['name' => 'AWS', 'proficiency' => 75, 'is_primary' => false],
                ],
            ],
            [
                'title' => 'Event Management Platform',
                'description' => 'Complete event management solution with ticketing, attendee registration, QR code check-in, and post-event analytics.',
                'is_featured' => false,
                'skills' => [
                    ['name' => 'Laravel', 'proficiency' => 89, 'is_primary' => true],
                    ['name' => 'JavaScript', 'proficiency' => 82, 'is_primary' => false],
                    ['name' => 'PostgreSQL', 'proficiency' => 84, 'is_primary' => false],
                    ['name' => 'Bootstrap', 'proficiency' => 78, 'is_primary' => false],
                ],
            ],
            [
                'title' => 'File Storage Service',
                'description' => 'Cloud-based file storage and sharing service with encryption, version control, and collaborative editing features.',
                'is_featured' => false,
                'skills' => [
                    ['name' => 'Laravel', 'proficiency' => 91, 'is_primary' => true],
                    ['name' => 'Vue.js', 'proficiency' => 86, 'is_primary' => false],
                    ['name' => 'MySQL', 'proficiency' => 81, 'is_primary' => false],
                    ['name' => 'AWS', 'proficiency' => 80, 'is_primary' => true],
                    ['name' => 'Docker', 'proficiency' => 77, 'is_primary' => false],
                ],
            ],
            [
                'title' => 'Fitness Tracking App',
                'description' => 'Mobile-friendly fitness application with workout logging, progress tracking, nutrition planning, and social features.',
                'is_featured' => false,
                'skills' => [
                    ['name' => 'React', 'proficiency' => 88, 'is_primary' => true],
                    ['name' => 'Node.js', 'proficiency' => 83, 'is_primary' => false],
                    ['name' => 'MongoDB', 'proficiency' => 80, 'is_primary' => false],
                    ['name' => 'Tailwind CSS', 'proficiency' => 85, 'is_primary' => false],
                ],
            ],
            [
                'title' => 'Invoice & Billing System',
                'description' => 'Professional invoicing software with recurring billing, payment tracking, expense management, and tax calculation features.',
                'is_featured' => false,
                'skills' => [
                    ['name' => 'Laravel', 'proficiency' => 92, 'is_primary' => true],
                    ['name' => 'Alpine.js', 'proficiency' => 82, 'is_primary' => false],
                    ['name' => 'MySQL', 'proficiency' => 87, 'is_primary' => false],
                    ['name' => 'Tailwind CSS', 'proficiency' => 89, 'is_primary' => false],
                ],
            ],
            [
                'title' => 'Learning Management System',
                'description' => 'Educational platform with course creation, student progress tracking, quizzes, certificates, and video lessons.',
                'is_featured' => true,
                'skills' => [
                    ['name' => 'Laravel', 'proficiency' => 94, 'is_primary' => true],
                    ['name' => 'Vue.js', 'proficiency' => 89, 'is_primary' => true],
                    ['name' => 'PostgreSQL', 'proficiency' => 86, 'is_primary' => false],
                    ['name' => 'Redis', 'proficiency' => 79, 'is_primary' => false],
                    ['name' => 'AWS', 'proficiency' => 76, 'is_primary' => false],
                ],
            ],
            [
                'title' => 'Recipe Sharing Platform',
                'description' => 'Community-driven recipe website with user submissions, ratings, comments, meal planning, and shopping list generation.',
                'is_featured' => false,
                'skills' => [
                    ['name' => 'Laravel', 'proficiency' => 88, 'is_primary' => true],
                    ['name' => 'JavaScript', 'proficiency' => 81, 'is_primary' => false],
                    ['name' => 'MySQL', 'proficiency' => 84, 'is_primary' => false],
                    ['name' => 'Bootstrap', 'proficiency' => 79, 'is_primary' => false],
                ],
            ],
            [
                'title' => 'Customer Support Ticketing',
                'description' => 'Help desk software with ticket management, knowledge base, live chat, customer portal, and SLA tracking.',
                'is_featured' => false,
                'skills' => [
                    ['name' => 'Laravel', 'proficiency' => 90, 'is_primary' => true],
                    ['name' => 'Vue.js', 'proficiency' => 84, 'is_primary' => false],
                    ['name' => 'MySQL', 'proficiency' => 83, 'is_primary' => false],
                    ['name' => 'Redis', 'proficiency' => 74, 'is_primary' => false],
                    ['name' => 'Tailwind CSS', 'proficiency' => 86, 'is_primary' => false],
                ],
            ],
            [
                'title' => 'Job Board Platform',
                'description' => 'Employment marketplace connecting job seekers with employers. Features application tracking, resume builder, and company profiles.',
                'is_featured' => false,
                'skills' => [
                    ['name' => 'Laravel', 'proficiency' => 91, 'is_primary' => true],
                    ['name' => 'Alpine.js', 'proficiency' => 79, 'is_primary' => false],
                    ['name' => 'PostgreSQL', 'proficiency' => 85, 'is_primary' => false],
                    ['name' => 'Tailwind CSS', 'proficiency' => 87, 'is_primary' => false],
                ],
            ],
            [
                'title' => 'Microservices Architecture',
                'description' => 'Scalable microservices-based system with service discovery, API gateway, message queuing, and containerized deployment.',
                'is_featured' => true,
                'skills' => [
                    ['name' => 'Node.js', 'proficiency' => 91, 'is_primary' => true],
                    ['name' => 'Docker', 'proficiency' => 88, 'is_primary' => true],
                    ['name' => 'MongoDB', 'proficiency' => 84, 'is_primary' => false],
                    ['name' => 'Redis', 'proficiency' => 82, 'is_primary' => false],
                    ['name' => 'REST API', 'proficiency' => 93, 'is_primary' => true],
                ],
            ],
            [
                'title' => 'Newsletter Management Tool',
                'description' => 'Email marketing platform with subscriber management, campaign creation, A/B testing, and detailed analytics.',
                'is_featured' => false,
                'skills' => [
                    ['name' => 'Laravel', 'proficiency' => 89, 'is_primary' => true],
                    ['name' => 'Vue.js', 'proficiency' => 83, 'is_primary' => false],
                    ['name' => 'MySQL', 'proficiency' => 82, 'is_primary' => false],
                    ['name' => 'Redis', 'proficiency' => 76, 'is_primary' => false],
                ],
            ],
            [
                'title' => 'Real Estate Listing Platform',
                'description' => 'Property listing website with advanced search filters, virtual tours, agent profiles, and mortgage calculator.',
                'is_featured' => false,
                'skills' => [
                    ['name' => 'Laravel', 'proficiency' => 90, 'is_primary' => true],
                    ['name' => 'JavaScript', 'proficiency' => 84, 'is_primary' => false],
                    ['name' => 'PostgreSQL', 'proficiency' => 83, 'is_primary' => false],
                    ['name' => 'Bootstrap', 'proficiency' => 77, 'is_primary' => false],
                ],
            ],
            [
                'title' => 'Data Visualization Library',
                'description' => 'JavaScript library for creating interactive charts and graphs with extensive customization options and export capabilities.',
                'is_featured' => false,
                'skills' => [
                    ['name' => 'TypeScript', 'proficiency' => 90, 'is_primary' => true],
                    ['name' => 'JavaScript', 'proficiency' => 93, 'is_primary' => true],
                    ['name' => 'HTML/CSS', 'proficiency' => 88, 'is_primary' => false],
                ],
            ],
            [
                'title' => 'Personal Finance Tracker',
                'description' => 'Budget management application with expense tracking, financial goals, investment monitoring, and spending insights.',
                'is_featured' => false,
                'skills' => [
                    ['name' => 'React', 'proficiency' => 86, 'is_primary' => true],
                    ['name' => 'Laravel', 'proficiency' => 85, 'is_primary' => true],
                    ['name' => 'MySQL', 'proficiency' => 80, 'is_primary' => false],
                    ['name' => 'Tailwind CSS', 'proficiency' => 84, 'is_primary' => false],
                ],
            ],
        ];

        $order = 0;
        foreach ($projectTemplates as $template) {
            $startDate = fake()->dateTimeBetween('-2 years', '-3 months');
            $hasEnded = fake()->boolean(60);

            $project = Project::create([
                'title' => $template['title'],
                'description' => $template['description'],
                'image' => null,
                'url' => fake()->boolean(70) ? fake()->url() : null,
                'github_url' => fake()->boolean(80) ? 'https://github.com/' . fake()->userName() . '/' . fake()->slug(2) : null,
                'technologies' => array_column($template['skills'], 'name'),
                'start_date' => $startDate,
                'end_date' => $hasEnded ? fake()->dateTimeBetween($startDate, 'now') : null,
                'is_featured' => $template['is_featured'],
                'order' => $order++,
            ]);

            $skillOrder = 0;
            foreach ($template['skills'] as $skillData) {
                if (isset($skillsByName[$skillData['name']])) {
                    $skill = $skillsByName[$skillData['name']];
                    $project->skills()->attach($skill->id, [
                        'proficiency_used' => $skillData['proficiency'],
                        'is_primary' => $skillData['is_primary'],
                        'order' => $skillOrder++,
                    ]);
                }
            }
        }
    }
}
