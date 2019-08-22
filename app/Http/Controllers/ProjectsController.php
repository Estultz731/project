<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectsController extends Controller
{
  public function index()
  {
    $projects = \App\Project::all();

    return view('projects.index', compact('projects'));
  }   

  public function create()
  {
    return view('projects.create');
  }

  public function show()
  {

  }

  public function edit()
  {
    return view('projects.edit');
  }

  public function update()
  {

  }

  public function destroy()
  {

  }

  public function store()
  {
    $project = new Project();

    $project->title = request('title');
    $project->description = request('description');

    $project->save();

    return redirect('/projects');
  }
}
