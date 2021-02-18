<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 
use App\Http\Requests; 
use App\Http\Controllers\Controller; 

class TaskListInsertController extends Controller
{
    public function insertTask(){ 
        return view('task_create'); 
        } 
        public function insertTaskDetail(Request $request){ 
        $taskName = $request->input('taskName');
        $taskDesc = $request->input('taskDesc'); 
        $taskPriority = $request->input('taskPriority'); 
        $taskStatus = $request->input('taskStatus'); 
        
        DB::insert('insert into task (taskName,taskDesc,taskStatus,taskPriority) values(?,?,?,?)',[$taskName,$taskDesc,$taskPriority,$taskStatus]); 

        return redirect()->back() ->with('alert', 'Record inserted successfully!');
        /* 
        $taskDetails = [
            [$taskName = $request->input('taskName')],
            [$taskDesc = $request->input('taskDesc')]
        ];

        DB::insert('insert into task (taskDetails) values(?)',[$taskDetails]);
        //DB::table("task")->insert($myItems); */

        //echo "Record inserted successfully.<br/>"; 
        //echo '<a href = "/insertTask">Click Here</a> to go back.';
        
        } 
}
