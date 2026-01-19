<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Attachment;
use App\Models\JobPosting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CandidateApplicationController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create($jobId)
    {
        $job = JobPosting::where('status', 'published')->findOrFail($jobId);
        
        // Check if already applied
        $existingApplication = Application::where('job_id', $jobId)
            ->where('candidate_id', Auth::id())
            ->first();

        if ($existingApplication) {
            return redirect()->route('candidate.jobs.show', $jobId)
                ->with('error', 'You have already applied for this position.');
        }

        return view('features::applications.pages.candidate-apply-job', compact('job'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $jobId)
    {
        $job = JobPosting::where('status', 'published')->findOrFail($jobId);

        // Check if already applied
        $existingApplication = Application::where('job_id', $jobId)
            ->where('candidate_id', Auth::id())
            ->exists();

        if ($existingApplication) {
             return redirect()->route('candidate.jobs.show', $jobId)
                ->with('error', 'You have already applied for this position.');
        }

        $request->validate([
            'cover_letter' => 'nullable|string|max:5000',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:2048', // 2MB Max
        ]);

        try {
            DB::beginTransaction();

            // Create Application
            $application = Application::create([
                'job_id' => $job->id,
                'candidate_id' => Auth::id(),
                'cover_letter' => $request->cover_letter,
                'status' => 'applied',
            ]);

            // Handle File Upload
            if ($request->hasFile('resume')) {
                $file = $request->file('resume');
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('resumes/' . $application->id, $filename, 'public');

                Attachment::create([
                    'application_id' => $application->id,
                    'file_path' => $path,
                    'file_name' => $file->getClientOriginalName(),
                    'file_type' => $file->getClientMimeType(),
                    'file_size' => $file->getSize(),
                ]);
            }

            DB::commit();

            return redirect()->route('candidate.dashboard')
                ->with('success', 'Your application for ' . $job->title . ' has been submitted successfully!');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'An error occurred while submitting your application. Please try again. ' . $e->getMessage());
        }
    }
}
