<?php

namespace Database\Seeders;

use App\Models\Application;
use App\Models\Attachment;
use Illuminate\Database\Seeder;

class AttachmentSeeder extends Seeder
{
    public function run(): void
    {
        $applications = Application::all();

        $cvFiles = [
            [
                'name' => 'john_doe_cv.pdf',
                'path' => 'cv/john_doe_cv.pdf',
                'size' => 245678,
            ],
            [
                'name' => 'jane_smith_resume.pdf',
                'path' => 'cv/jane_smith_resume.pdf',
                'size' => 189456,
            ],
            [
                'name' => 'michael_brown_cv.pdf',
                'path' => 'cv/michael_brown_cv.pdf',
                'size' => 312890,
            ],
            [
                'name' => 'emily_davis_resume.pdf',
                'path' => 'cv/emily_davis_resume.pdf',
                'size' => 198234,
            ],
            [
                'name' => 'david_wilson_cv.pdf',
                'path' => 'cv/david_wilson_cv.pdf',
                'size' => 267890,
            ],
        ];

        foreach ($applications as $index => $application) {
            if ($index < count($cvFiles)) {
                Attachment::create([
                    'application_id' => $application->id,
                    'file_path' => $cvFiles[$index]['path'],
                    'file_name' => $cvFiles[$index]['name'],
                    'file_type' => 'application/pdf',
                    'file_size' => $cvFiles[$index]['size'],
                ]);
            }
        }
    }
}
