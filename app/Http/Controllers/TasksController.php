<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index() {
        return view('tasks')
            ->with('tasks', Task::orderBy('created_at', 'asc')->get());
    }

    public function store(Request $request) {
        $this->validate($request, [
            'task-name' => 'required|max:255',
        ]);

        $task = new Task;
        $task->name = $request->input('task-name');
        $task->save();

        return redirect()->route('index');
     }

    public function destroy(Task $task) {
        $task->delete();

        return redirect()->route('index');
    }
}
