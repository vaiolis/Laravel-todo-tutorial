<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Task;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Project $project)
    {
        //
		return view('tasks.index', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Project $project)
    {
        //
		return view('tasks.create', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Project $project, Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  Task $task
     * @return Response
     */
    public function show(Project $project, Task $task)
    {
        //
		return view('tasks.show', compact('project', 'task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Task $task
     * @return Response
     */
    public function edit(Project $project, Task $task)
    {
        //
		return view('tasks.edit', compact('project', 'task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  Task $task
     * @return Response
     */
    public function update(Project $project, Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Task $task
     * @return Response
     */
    public function destroy(Project $project, Task $task)
    {
        //
    }
}
