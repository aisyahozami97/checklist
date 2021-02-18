<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TaskDeleteController extends Controller
{
    public function index(){
        $task = DB::select('select * from task');
        return view('task_delete',['task'=>$task]);
        }
        public function destroy($taskId) {
        DB::delete('delete from task where taskId = ?',[$taskId]);
        return redirect()->back() ->with('alert', 'Record deleted successfully!');
        //echo "Record deleted successfully.<br/>";
        //echo '<a href = "/delete-records">Click Here</a> to go back.';
        } 
}
