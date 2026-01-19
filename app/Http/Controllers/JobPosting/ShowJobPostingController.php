<?php

namespace App\Http\Controllers\JobPosting;

use App\Http\Controllers\Controller;
use App\Models\JobPosting;
use Illuminate\Http\Request;

class ShowJobPostingController extends Controller
{
    /**
     * Display a listing of the job postings for admin.
     */
    public function index()
    {
        $jobPostings = JobPosting::paginate(5);
        return view('features::job-posting.pages.admin-job-list', compact('jobPostings'));
    }

    /**
     * Display the specified job posting.
     */
    public function show($id)
    {
        return view('features::job-posting.pages.show-job-posting', [
            'id' => $id
        ]);
    }

    /**
     * Display a listing of the job postings for candidates.
     */
    public function candidateIndex()
    {
        $jobPostings = JobPosting::where('status', 'published')->paginate(9);
        return view('features::job-posting.pages.candidate-job-list', compact('jobPostings'));
    }

    /**
     * Display the specified job posting for candidates.
     */
    public function candidateShow($id)
    {
        $jobPosting = JobPosting::where('status', 'published')->findOrFail($id);
        return view('features::job-posting.pages.candidate-show-job', compact('jobPosting'));
    }
}