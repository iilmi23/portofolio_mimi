<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the admin dashboard.
     */

    public function index()
    {
        $totalProjects = \App\Models\Project::count();
        return view('admin.dashboard', compact('totalProjects'));
    }
}
