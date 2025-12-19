<?php

namespace Database\Seeders;

use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'name' => 'Customer Analytics Dashboard',
                'client' => 'Acme Corp',
                'type' => 'Off-Roadmap',
                'status' => 'In Progress',
                'priority' => 'High',
                'resources' => 'Sarah Johnson, Mike Chen',
                'is_billable' => true,
                'start_date' => Carbon::now()->subDays(30),
                'planned_end_date' => Carbon::now()->addDays(15),
                'forecast_end_date' => Carbon::now()->addDays(12),
                'progress_percentage' => 65,
                'pm_comment' => 'On track. Client review scheduled for next week.',
                'last_week_rag' => 'Green',
            ],
            [
                'name' => 'Machine Learning Model Optimization',
                'client' => 'TechStart Inc',
                'type' => 'Off-Roadmap',
                'status' => 'In Progress',
                'priority' => 'High',
                'resources' => 'David Lee, Emma Wilson',
                'is_billable' => true,
                'start_date' => Carbon::now()->subDays(45),
                'planned_end_date' => Carbon::now()->addDays(5),
                'forecast_end_date' => Carbon::now()->addDays(18),
                'progress_percentage' => 75,
                'pm_comment' => 'Performance improvements taking longer than expected. Discussing timeline with client.',
                'last_week_rag' => 'Amber',
            ],
            [
                'name' => 'Internal CRM System',
                'client' => null,
                'type' => 'Roadmap',
                'status' => 'In Progress',
                'priority' => 'Medium',
                'resources' => 'Alex Brown, Lisa Martinez',
                'is_billable' => false,
                'start_date' => Carbon::now()->subDays(60),
                'planned_end_date' => Carbon::now()->subDays(5),
                'forecast_end_date' => Carbon::now()->addDays(25),
                'progress_percentage' => 80,
                'pm_comment' => 'Delayed due to integration complexities. Additional resources may be needed.',
                'last_week_rag' => 'Red',
            ],
            [
                'name' => 'E-commerce Platform Migration',
                'client' => 'RetailPro',
                'type' => 'Off-Roadmap',
                'status' => 'QA/Testing',
                'priority' => 'High',
                'resources' => 'Tom Harris, Rachel Kim',
                'is_billable' => true,
                'start_date' => Carbon::now()->subDays(90),
                'planned_end_date' => Carbon::now()->addDays(10),
                'forecast_end_date' => Carbon::now()->addDays(8),
                'progress_percentage' => 90,
                'pm_comment' => 'Final testing phase. UAT scheduled for end of week.',
                'last_week_rag' => 'Amber',
            ],
            [
                'name' => 'Cloud Infrastructure Audit',
                'client' => 'FinServe Ltd',
                'type' => 'Off-Roadmap',
                'status' => 'In Progress',
                'priority' => 'Medium',
                'resources' => 'James Taylor',
                'is_billable' => true,
                'start_date' => Carbon::now()->subDays(20),
                'planned_end_date' => Carbon::now()->addDays(25),
                'forecast_end_date' => Carbon::now()->addDays(20),
                'progress_percentage' => 45,
                'pm_comment' => 'Audit progressing well. Initial findings report delivered.',
                'last_week_rag' => 'Green',
            ],
            [
                'name' => 'API Documentation Portal',
                'client' => null,
                'type' => 'Internal',
                'status' => 'Planning',
                'priority' => 'Low',
                'resources' => 'Nina Patel',
                'is_billable' => false,
                'start_date' => Carbon::now()->addDays(5),
                'planned_end_date' => Carbon::now()->addDays(40),
                'forecast_end_date' => Carbon::now()->addDays(40),
                'progress_percentage' => 10,
                'pm_comment' => 'Requirements gathering in progress.',
                'last_week_rag' => null,
            ],
            [
                'name' => 'Mobile App Redesign',
                'client' => 'HealthTech Solutions',
                'type' => 'Off-Roadmap',
                'status' => 'Completed',
                'priority' => 'High',
                'resources' => 'Chris Anderson, Maria Garcia',
                'is_billable' => true,
                'start_date' => Carbon::now()->subDays(120),
                'planned_end_date' => Carbon::now()->subDays(10),
                'forecast_end_date' => Carbon::now()->subDays(12),
                'progress_percentage' => 100,
                'pm_comment' => 'Successfully delivered. Positive client feedback received.',
                'last_week_rag' => 'Green',
            ],
            [
                'name' => 'Data Warehouse Implementation',
                'client' => 'DataCorp',
                'type' => 'Off-Roadmap',
                'status' => 'Completed',
                'priority' => 'High',
                'resources' => 'Kevin Zhang, Sophia Lee',
                'is_billable' => true,
                'start_date' => Carbon::now()->subDays(150),
                'planned_end_date' => Carbon::now()->subDays(20),
                'forecast_end_date' => Carbon::now()->subDays(22),
                'progress_percentage' => 100,
                'pm_comment' => 'Completed ahead of schedule. Client very satisfied.',
                'last_week_rag' => 'Green',
            ],
        ];

        foreach ($projects as $projectData) {
            Project::create($projectData);
        }
    }
}
