<?php

namespace Database\Seeders;

use App\Models\JobPosting;
use App\Models\User;
use Illuminate\Database\Seeder;

class JobPostingSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::where('role', 'admin')->first();

        JobPosting::create([
            'title' => 'Senior Software Engineer',
            'description' => 'We are looking for a Senior Software Engineer to join our team. You will be responsible for designing and implementing high-quality software solutions using modern technologies.',
            'employment_type' => 'full-time',
            'location' => 'Jakarta, Indonesia',
            'salary_min' => 15000000,
            'salary_max' => 25000000,
            'status' => 'published',
            'published_at' => now(),
            'created_by' => $admin->id,
        ]);

        JobPosting::create([
            'title' => 'Junior Frontend Developer',
            'description' => 'Join our frontend team to build beautiful and responsive user interfaces. Experience with React, Vue, or similar frameworks is required.',
            'employment_type' => 'full-time',
            'location' => 'Remote',
            'salary_min' => 8000000,
            'salary_max' => 12000000,
            'status' => 'published',
            'published_at' => now(),
            'created_by' => $admin->id,
        ]);

        JobPosting::create([
            'title' => 'DevOps Engineer',
            'description' => 'We need a DevOps Engineer to manage our cloud infrastructure and CI/CD pipelines. AWS/GCP experience is a plus.',
            'employment_type' => 'full-time',
            'location' => 'Bandung, Indonesia',
            'salary_min' => 12000000,
            'salary_max' => 20000000,
            'status' => 'published',
            'published_at' => now(),
            'created_by' => $admin->id,
        ]);

        JobPosting::create([
            'title' => 'Product Designer Intern',
            'description' => 'Learn and grow with our design team. This internship opportunity is perfect for students passionate about UI/UX design.',
            'employment_type' => 'internship',
            'location' => 'Jakarta, Indonesia',
            'salary_min' => 3000000,
            'salary_max' => 5000000,
            'status' => 'published',
            'published_at' => now(),
            'created_by' => $admin->id,
        ]);

        JobPosting::create([
            'title' => 'Backend Developer (Contract)',
            'description' => '6-month contract position for an experienced backend developer. Strong knowledge of PHP/Laravel is required.',
            'employment_type' => 'contract',
            'location' => 'Remote',
            'salary_min' => 10000000,
            'salary_max' => 15000000,
            'status' => 'draft',
            'created_by' => $admin->id,
        ]);
    }
}
