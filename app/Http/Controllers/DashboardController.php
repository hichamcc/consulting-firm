<?php

namespace App\Http\Controllers;

use App\Models\Project;

class DashboardController extends Controller
{
    public function index()
    {
        $activeProjects = Project::active()->get();
        $completedProjects = Project::completed()->latest()->take(5)->get();

        $greenCount = $activeProjects->filter(fn($p) => $p->rag_status === 'Green')->count();
        $amberCount = $activeProjects->filter(fn($p) => $p->rag_status === 'Amber')->count();
        $redCount = $activeProjects->filter(fn($p) => $p->rag_status === 'Red')->count();

        return view('dashboard', [
            'activeProjects' => $activeProjects,
            'completedProjects' => $completedProjects,
            'totalActiveProjects' => $activeProjects->count(),
            'greenCount' => $greenCount,
            'amberCount' => $amberCount,
            'redCount' => $redCount,
        ]);
    }
}
