<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function daily(Task $task)
    {
        return view('tasks/daily')->with(['tasks' => $task->get()]);
    }
}
