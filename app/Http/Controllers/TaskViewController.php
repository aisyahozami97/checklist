<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TaskViewController extends Controller
{
    public function index(){
        $task = DB::select('select * from task');
        return view('task_view',['task'=>$task]);

        }
}