<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|url',
            'description' => 'nullable|string',
            'technologies' => 'nullable|string',
            'image' => 'nullable|image|max:2048'
        ]);

        $data = $request->only(['title', 'url', 'description', 'technologies']);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $path = $image->storeAs('projects', $imageName, 'public');
            $data['image_path'] = $path;
        }

        Project::create($data);

        return redirect()->route('admin.projects.index')->with('success', 'Project added successfully');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|url',
            'description' => 'nullable|string',
            'technologies' => 'nullable|string',
            'image' => 'nullable|image|max:2048'
        ]);

        $data = $request->only(['title', 'url', 'description', 'technologies']);

        if ($request->hasFile('image')) {
            if ($project->image_path) {
                Storage::disk('public')->delete($project->image_path);
            }
            
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $path = $image->storeAs('projects', $imageName, 'public');
            $data['image_path'] = $path;
        }

        $project->update($data);

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully');
    }

    public function destroy(Project $project)
    {
        if ($project->image_path) {
            Storage::disk('public')->delete($project->image_path);
        }
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully');
    }
}