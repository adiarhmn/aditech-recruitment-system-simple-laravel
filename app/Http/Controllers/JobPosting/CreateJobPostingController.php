<?php

namespace App\Http\Controllers\JobPosting;

use App\Http\Controllers\Controller;
use App\Models\JobPosting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class CreateJobPostingController extends Controller
{
    public function create(): View
    {
        return view('features::job-posting.pages.admin-create-job-posting');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'employment_type' => 'required|in:full-time,part-time,contract,internship',
            'location' => 'required|string|max:255',
            'salary_min' => 'nullable|numeric|min:0',
            'salary_max' => 'nullable|numeric|min:0|gt:salary_min',
            'description' => 'required|string',
            'status' => 'required|in:draft,published,closed',
        ]);

        $validated['created_by'] = Auth::user()->id;

        if ($validated['status'] === 'published') {
            $validated['published_at'] = now();
        }

        JobPosting::create($validated);

        return redirect()
            ->route('admin.jobs.index')
            ->with('success', 'Job posting created successfully!');
    }
}
