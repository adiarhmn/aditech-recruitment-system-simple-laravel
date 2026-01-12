<?php

namespace App\Http\Controllers\JobPosting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowJobPostingController extends Controller
{
    public function showJobPosting()
    {
        return view('features::job-posting.pages.show-job-posting');
    }
}
