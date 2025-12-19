<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::active()->latest()->get();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'client' => 'nullable|string|max:255',
            'type' => 'required|in:Roadmap,Off-Roadmap,Internal',
            'status' => 'required|string|max:255',
            'priority' => 'required|in:High,Medium,Low',
            'resources' => 'nullable|string',
            'is_billable' => 'boolean',
            'start_date' => 'nullable|date',
            'planned_end_date' => 'nullable|date',
            'forecast_end_date' => 'nullable|date',
            'progress_percentage' => 'required|integer|min:0|max:100',
            'pm_comment' => 'nullable|string',
        ]);

        Project::create($validated);

        return redirect()->route('dashboard')
            ->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'client' => 'nullable|string|max:255',
            'type' => 'required|in:Roadmap,Off-Roadmap,Internal',
            'status' => 'required|string|max:255',
            'priority' => 'required|in:High,Medium,Low',
            'resources' => 'nullable|string',
            'is_billable' => 'boolean',
            'start_date' => 'nullable|date',
            'planned_end_date' => 'nullable|date',
            'forecast_end_date' => 'nullable|date',
            'progress_percentage' => 'required|integer|min:0|max:100',
            'pm_comment' => 'nullable|string',
        ]);

        $project->update($validated);

        return redirect()->route('dashboard')
            ->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('dashboard')
            ->with('success', 'Project deleted successfully.');
    }
}
