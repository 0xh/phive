<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Task;

class CompletedTasksController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param Task $task
     * @return \Illuminate\Http\Response
     */
    public function store(Task $task)
    {
        $task->complete();

        return redirect()->action([ProjectsController::class, 'show'], $task->project);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Task $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->incomplete();

        return redirect()->action([ProjectsController::class, 'show'], $task->project);
    }
}
