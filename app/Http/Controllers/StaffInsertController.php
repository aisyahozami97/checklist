<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB; 
use App\Http\Requests; 
use App\Http\Controllers\Controller; 


class StaffInsertController extends Controller
{
    public function insertform(){ 
        return view('staff_create'); 
        } 
        public function insert(Request $request){ 
        $name = $request->input('staff_name'); 
        DB::insert('insert into staff (name) values(?)',[$name]); 

        //$email = $request->input('staff_email'); 
        //DB::insert('insert into staff (email) values(?)',[$email]); 
        
        //$position = $request->input('staff_position'); 
        //DB::insert('insert into staff (position) values(?)',[$position]); 
        
        //$salary = $request->input('staff_salary'); 
        //DB::insert('insert into staff (salary) values(?)',[$salary]); 
        
        echo "Record inserted successfully.<br/>"; 
        echo '<a href = "/insert">Click Here</a> to go back.';
        } 
}