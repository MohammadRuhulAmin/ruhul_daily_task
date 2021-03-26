<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
class SearchController extends Controller
{
    public function searchItem(Request $request){
        $defaultMsg = "Not Found";
        if($request->has('dataQuery')){
            $query = $request->dataQuery;
            $result = Task::where('task_title','like','%'.$query.'%')
            ->orWhere('task_description','like','%'.$query.'%')->get();
            return response()->json($result);
        }
        else return $defaultMsg;
    }
}
