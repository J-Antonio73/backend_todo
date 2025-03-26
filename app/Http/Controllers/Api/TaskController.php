<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Task::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $task = new Task();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->limit_date = $request->limit_date;
        $task->save();

        return $task;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = Task::findOrFail($id);

        return response()->json($task);
    }

    /**
     * Display the completed tasks.
     */
    public function showCompleted()
    {
        $tasks = Task::where('completed', 1)->get();

        return response()->json($tasks);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $task = Task::findOrFail($id);
        $task->title = $request->title;
        $task->description = $request->description;
        $task->limit_date = $request->limit_date;
        $task->save();

        return $task;
    }

    /**
     * Update the status of the specified resource in storage.
     */
    public function updateStatus(Request $request, string $id)
    {
        $task = Task::findOrFail($id);
        $task->update($request->only(['completed']));

        return response()->json($task);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return response()->json(null, 204);
    }
}
