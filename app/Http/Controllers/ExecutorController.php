<?php

namespace App\Http\Controllers;

use App\Models\Executor;
use App\Http\Requests\ExecutorRequest;

class ExecutorController extends Controller
{
    public function createExecutor(ExecutorRequest $request) {
        $data = $request->validated();
        $executor = Executor::create($data);
        return $executor;
    }

    public function editExecutor(ExecutorRequest $request, Executor $id){
        $data = $request->validated();
        $id->update($data);
        return $id;
    }

    public function deleteExecutor(Executor $id){
        $id->delete();
        return $id;
    }
    
    public function getStoreExecutors(){
        $executors = Executor::all();
        return $executors;
    }

    public function getStoreExecutor(Executor $id){
        return $id;
    }
}
