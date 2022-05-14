<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\Employee;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return view('front.home',['Employee' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Companies::all();     
        return view('employees.create',['companies'=>$companies]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // save data to database
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'company_id' => 'required',
            'phone' => 'required'
        ]);
        $show = Employee::create($validatedData);
   
        return redirect('/employees')->with('success', 'Employee added successfully');

    
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd('test');
        $employeesList =Employee::find($id);
        return response()->json(['employee' => $employeesList],200);
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $employeesList =Employee::find($id);
        return response()->json(['employee' => $employeesList],200);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd('test');
        $employees = Employee::find($id);
        $employees->first_name=$request->input('first_name');
        $employees->last_name=$request->input('last_name');
        $employees->email=$request->input('email');
        $employees->password=$request->input('password');
        $employees->company_id=$request->input('company_id');
        $employees->phone=$request->input('phone');
        $employees->save();
        return response()->json($employees);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd('test');
        Employee::where('id',$id)->delete();
        return response()->json(['success'=>'Employee deleted successfully']);
    }
}
