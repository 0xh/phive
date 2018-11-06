<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

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

        return back();
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

        return back();
    }
}
