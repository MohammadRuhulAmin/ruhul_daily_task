<?php

namespace App\Http\Controllers\Task;
use App\Models\Task;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        return view('Task.task');
    }
    public function showAllTask(){
        $task = Task::all();
        return response()->json($task);
    }
    public function store(Request $request){
        $task = new Task();
        $task->task_title = $request->task_title;
        $task->task_description = $request->task_description;
        $task->task_information = $request->task_information;
        $task->task_status = $request->task_status;
        $task->save();
        return response()->json($task);
    }
    public function deleteTask($id){
        $task = Task::find($id);
        $task->delete();
        return response()->json($task);
    }
    public function editTask($id){
        $task = Task::find($id);
        return response()->json($task);
    }
    public function updateTask(Request $request , $task_id){
        $task = Task::find($task_id);
        $task->task_title = $request->task_title;
        $task->task_description = $request->task_description;
        $task->task_information = $request->task_information;
        $task->task_status = $request->task_status;
        $task->save();
        return response()->json($task);
    }
    public function taskGroupDelete(Request $request){
        $itemsToDelete =  $request->deleteListId;
        foreach($itemsToDelete as $task_id ){
            $task = Task::find($task_id);
            $task->delete();
        }
        $message = "Tasks are deleted successfully!";
        return response()->json($message);
    }
}
