<?php

namespace Database\Seeders;

use App\Models\Application;
use App\Models\JobPosting;
use App\Models\User;
use Illuminate\Database\Seeder;

class ApplicationSeeder extends Seeder
{
    public function run(): void
    {
        $job1 = JobPosting::where('title', 'Senior Software Engineer')->first();
        $job2 = JobPosting::where('title', 'Junior Frontend Developer')->first();
        $job3 = JobPosting::where('title', 'DevOps Engineer')->first();
        $job4 = JobPosting::where('title', 'Product Designer Intern')->first();

        $candidates = User::where('role', 'candidate')->get();

        Application::create([
            'job_id' => $job1->id,
            'candidate_id' => $candidates[0]->id,
            'cover_letter' => 'I am excited to apply for this position. With 5 years of experience in software development, I believe I would be a great fit for your team.',
            'status' => 'shortlisted',
        ]);

        Application::create([
            'job_id' => $job1->id,
            'candidate_id' => $candidates[1]->id,
            'cover_letter' => 'This role perfectly aligns with my career goals. I have extensive experience building scalable applications.',
            'status' => 'applied',
        ]);

        Application::create([
            'job_id' => $job2->id,
            'candidate_id' => $candidates[2]->id,
            'cover_letter' => 'As a recent graduate with a passion for frontend development, I am eager to contribute to your team.',
            'status' => 'interview',
        ]);

        Application::create([
            'job_id' => $job2->id,
            'candidate_id' => $candidates[3]->id,
            'cover_letter' => 'I have built several projects using React and would love to bring my skills to ADITECH.',
            'status' => 'applied',
        ]);

        Application::create([
            'job_id' => $job3->id,
            'candidate_id' => $candidates[4]->id,
            'cover_letter' => 'I have managed cloud infrastructure for multiple startups and am excited about this opportunity.',
            'status' => 'hired',
        ]);

        Application::create([
            'job_id' => $job4->id,
            'candidate_id' => $candidates[0]->id,
            'cover_letter' => 'I am a design student looking for an internship to gain real-world experience.',
            'status' => 'rejected',
        ]);
    }
}
