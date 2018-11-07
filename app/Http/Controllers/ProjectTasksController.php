<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectTasksController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param Project $project
     * @return \Illuminate\Http\Response
     */
    public function store(Project $project)
    {
        $project->addTask(\Request::validate(['description' => ['required', 'max:255']]));

        return redirect()->action([ProjectsController::class, 'show'], $project);
    }
}
