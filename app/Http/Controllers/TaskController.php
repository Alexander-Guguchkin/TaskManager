<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function createTask(TaskRequest $request) {
        $data = $request->validated();
        $task = Task::create($data);
        return $task;
    }

    public function editTask(TaskRequest $request, Task $id){
        $data = $request->validated();
        $id->update($data);
        return $id;
    }

    public function deleteTask($id){

    }
    
    public function getStoreTasks(){
        $tasks = Task::all();
        return $tasks;
    }

    public function getStoreTask($id){
        
    }
}