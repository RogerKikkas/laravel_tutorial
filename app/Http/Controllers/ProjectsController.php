<?php

namespace App\Http\Controllers;

use App\Project;
use App\Events\ProjectCreated;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $projects = auth()->user()->projects;
        // $projects = Project::where('owner_id', auth()->id())->get();

        return view('projects.index', [
            'projects' => auth()->user()->projects
        ]);
    }

    public function store()
    {
        $attributes = $this->validateProject();

        $attributes['owner_id'] = auth()->id();

        $project = Project::create($attributes);

        event(new ProjectCreated($project));

        flash('Your project has been created.');

        return redirect('/projects');
    }

    public function create()
    {
        return view('projects.create');
    }

    public function show(Project $project)
    {
        #$project = app('\App\Project');
        #$project = Project::findOrFail($id);
        // $this->authorize('update', $project);
        // abort_unless(\Gate::allows('update', $project), 403);

        return view('projects.show', compact('project'));
    }

    public function update(Project $project)
    {
        $project->update($this->validateProject());

        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function validateProject()
    {
        return request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3']
        ]);
    }
}
