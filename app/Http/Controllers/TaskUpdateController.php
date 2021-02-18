<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TaskUpdateController extends Controller
{
    public function index(){
        $task = DB::select('select * from task');
        return view('task_edit_view',['task'=>$task]);
        }
        public function show($taskId) {
        $task = DB::select('select * from task where taskId = ?',[$taskId]);
        return view('task_update',['task'=>$task]);
        }
        public function edit(Request $request,$taskId) {
        // Declare and important to have same argument number 
        $taskName = $request->input('taskName');
        $taskDesc = $request->input('taskDesc');
        $taskPriority = $request->input('taskPriority'); 
        $taskStatus = $request->input('taskStatus'); 
        //DB::update('update task set taskName = ?,taskDesc = ? where taskId = ?',[$taskName,$taskDesc,$taskId]);
        DB::update('update task set taskName = ?,taskDesc = ?, taskPriority = ?, taskStatus=?  where taskId = ?',[$taskName,$taskDesc,$taskPriority,$taskStatus,$taskId]);

        //echo "Record updated successfully.<br/>";
        //echo '<a href = "/edit-records">Click Here</a> to go back.';
        return redirect()->back() ->with('alert', 'Record updated successfully!');
        
        }
}
