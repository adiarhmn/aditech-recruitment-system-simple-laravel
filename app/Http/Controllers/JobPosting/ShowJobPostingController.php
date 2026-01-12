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
        $jobPostings = JobPosting::paginate(10);
      
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
}