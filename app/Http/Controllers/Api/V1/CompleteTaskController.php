<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Model\Task;
use App\Http\Controllers\TaskResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompleteTaskController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Task $task)
    {
        $task->is_completed = $request->is_completed;
        $task->save();

        return TaskResource::make($task);
    }
}
