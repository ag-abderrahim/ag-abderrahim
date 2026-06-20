<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $projects = Project::where('status', 1)
            ->where('featured', 1)
            ->latest()
            ->take(3)
            ->get();
        return view('home.pages.homev2', compact('projects'));
    }

    public function projects()
    {
        $projects = Project::where('status', 1)
            ->latest()
            ->paginate(6);

        return view('home.pages.pages.projects.index', compact('projects'));
    }
    public function projectShow($slug)
    {
        $project = Project::where('slug', $slug)
            ->where('status', 1)
            ->firstOrFail();

        $relatedProjects = Project::where('id', '!=', $project->id)
            ->where('status', 1)
            ->latest()
            ->take(3)
            ->get();

        return view('home.pages.pages.projects.show', compact('project', 'relatedProjects'));
}
}
