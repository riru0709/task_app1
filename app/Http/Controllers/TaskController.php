<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function daily(Task $task)
    {
        /*$task = Task::with(['tasks' => function($query){
            $query->where('period', 'daily');
            $query->isToday();
        }]);*/
        return view('/daily')->with(['tasks' => $task->where('period', 'daily')->get()]);
    }
    
    public function weekly(Task $task)
    {
        return view('/weekly')->with(['tasks' => $task->where('period', 'weekly')->get()]);
    }
    
    public function monthly(Task $task)
    {
        return view('/monthly')->with(['tasks' => $task->where('period', 'monthly')->get()]);
    }
}
