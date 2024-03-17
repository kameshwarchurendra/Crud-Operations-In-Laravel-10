<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class UserController extends Controller{


    public function index(Request $request){

        $employee = Employee::all();

        return view('list',compact('employee'));

    }
  
    public function add(Request $request){
        return view('form');

    }

    public function store(Request $request){

        $request->validate([
                            'name' => 'required',
                            'email' => 'required',
                            'phone' => 'required',
                        ]);
        $employee = New Employee;
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->save();
        
        return redirect('/')->with('success','Insert successfully');
        
        session()->flash('success', 'Insert successfully');


    }


    public function edit(Request $request,$id){

        $employee = Employee::where('id',$id)->first();
        return view('edit',compact('employee'));
    }

    public function update(Request $request){

        $request->validate([
                            'name' => 'required',
                            'email' => 'required',
                            'phone' => 'required',
                        ]);
        $employee = Employee::where('id',$request->id)->first();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->save();
        return redirect('/')->with('success','Update successfully');

        session()->flash('success', 'Update successfully');


    }

    public function delete(Request $request,$id){

        $employee = Employee::where('id', $request->id)->first();
        $employee->delete();
        return redirect('/')->with('success','Delete successfully');
        session()->flash('success', 'Delete successfully');

    } 
    

    
}
