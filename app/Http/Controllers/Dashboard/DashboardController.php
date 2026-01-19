<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function adminDashboard(): View
    {
        return view('features::dashboard.pages.admin-dashboard');
    }

    public function candidateDashboard(): View
    {
        return view('features::dashboard.pages.candidate-dashboard');
    }
}
