<?php

namespace App\Http\Controllers;
use App\Models\Project;


class ProjectsController extends Controller
{
    public function index()
    {
        $projects= Project::all();
        return view('projects.index',compact('projects'));
    }

    public function store()
    {
        $attributes= request()->validate(['title'=> 'required' ]);
        Project::create($attributes);
        return redirect('/projects');
    }
}
