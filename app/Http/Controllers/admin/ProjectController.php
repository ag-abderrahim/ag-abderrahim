<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();

        return view('admin.pages.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.pages.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:projects,slug',
            'category' => 'nullable|string',
            'short_desc' => 'nullable|string',
            'overview' => 'nullable|string',
            'problem' => 'nullable|string',
            'solution' => 'nullable|string',
            'thumbnail' => 'nullable|image',
            'gallery.*' => 'nullable|image',
        ]);

        $thumbnailPath = null;

        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('projects', 'public');
        }

        $tools = $request->tools
            ? array_map('trim', explode(',', $request->tools))
            : [];

        $project = Project::create([
            'name' => $request->name,
            'slug' => $request->slug ?? Str::slug($request->name),
            'category' => $request->category,
            'short_desc' => $request->short_desc,
            'overview' => $request->overview,
            'problem' => $request->problem,
            'solution' => $request->solution,
            'thumbnail' => $thumbnailPath,
            'live_url' => $request->live_url,
            'github_url' => $request->github_url,
            'tools' => $tools,
            'featured' => $request->featured ? 1 : 0,
            'status' => $request->status ? 1 : 0,
        ]);

        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $image) {
                $path = $image->store('projects/gallery', 'public');

                ProjectImages::create([
                    'project_id' => $project->id,
                    'image' => $path,
                ]);
            }
        }

        return redirect()->route('projects.index')
            ->with('success', 'Project created successfully.');
    }

    public function show(Project $project)
    {
        return view('admin.pages.projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('admin.pages.projects.edit', compact('project'));
    }
    public function storeGallery(Request $request, Project $project)
    {
        $request->validate([
            'gallery.*' => 'required|image'
        ]);

        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $image) {
                $path = $image->store('projects/gallery', 'public');

                ProjectImages::create([
                    'project_id' => $project->id,
                    'image' => $path
                ]);
            }
        }

        return back()->with('success', 'Gallery updated successfully');
    }

    public function reorderGallery(Request $request)
    {
        foreach ($request->order as $item) {
            ProjectImages::where('id', $item['id'])
                ->update(['sort_order' => $item['order']]);
        }

        return response()->json(['success' => true]);
    }
    public function deleteGallery($id)
    {
        $image = ProjectImages::findOrFail($id);

        if ($image->image && Storage::disk('public')->exists($image->image)) {
            Storage::disk('public')->delete($image->image);
        }

        $image->delete();

        return response()->json([
            'success' => true
        ]);
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:projects,slug,' . $project->id,
            'thumbnail' => 'nullable|image',
            'gallery.*' => 'nullable|image',
        ]);

        $thumbnailPath = $project->thumbnail;

        if ($request->hasFile('thumbnail')) {

            if ($project->thumbnail && Storage::disk('public')->exists($project->thumbnail)) {
                Storage::disk('public')->delete($project->thumbnail);
            }

            $thumbnailPath = $request->file('thumbnail')->store('projects', 'public');
        }

        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('projects', 'public');
        }

        $tools = $request->tools
            ? array_map('trim', explode(',', $request->tools))
            : [];

        $project->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'category' => $request->category,
            'short_desc' => $request->short_desc,
            'overview' => $request->overview,
            'problem' => $request->problem,
            'solution' => $request->solution,
            'thumbnail' => $thumbnailPath,
            'live_url' => $request->live_url,
            'github_url' => $request->github_url,
            'tools' => $tools,
            'featured' => $request->featured ? 1 : 0,
            'status' => $request->status ? 1 : 0,
        ]);

        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $image) {
                $path = $image->store('projects/gallery', 'public');

                ProjectImages::create([
                    'project_id' => $project->id,
                    'image' => $path,
                ]);
            }
        }

        return redirect()->route('projects.index')
            ->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {

        // Delete thumbnail
        if ($project->thumbnail && Storage::disk('public')->exists($project->thumbnail)) {
            Storage::disk('public')->delete($project->thumbnail);
        }

        // Delete gallery images
        foreach ($project->images as $image) {
            if ($image->image && Storage::disk('public')->exists($image->image)) {
                Storage::disk('public')->delete($image->image);
            }

            $image->delete();
        }
        $project->delete();

        return redirect()->route('projects.index')
            ->with('success', 'Project deleted successfully.');
    }
}
