<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }


    public function create()
    {
        return view('tasks.create');
    }


    public function store(Request $request)
    {
        Task::create($request->validate());
        return redirect()->route('task.index');
    }


    public function show(Task $task)
    {
        return view('tasks.show', compact('tasks'));
    }


    public function edit(Task $task)
    {
        return view('tasks.edit', compact('tasks'));
    }


    public function update(Request $request, Task $task)
    {
        $task->update($request->validate());
        return redirect()->route('task.index');
    }


    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('task.index');
    }
}
