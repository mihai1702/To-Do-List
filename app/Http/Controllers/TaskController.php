<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('created_at', 'desc')->get();
        return view('index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:191',
        ]);

        Task::create([
            'title' => $request->title,
            'completed' =>false,
        ]);

        return redirect()->route('tasks.index')->with('success',' Task added');
    }

    public function update(Request $request, Task $task)
    {
        $task->update([
            'completed' => ! $task->completed,
        ]);
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Tasl sters!');
    }
}
