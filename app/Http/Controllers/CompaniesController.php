<?php

namespace App\Http\Controllers;

use App\Models\Companies;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\Command\WhereamiCommand;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Companies::all();
        return view('front.companies',['companies'=>$companies]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $companies = Companies::all();
        return view('companies.create',['companies'=>$companies]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $companies = new Companies();
        $companies->name=$request->input('name');
        $companies->email=$request->input('email');
        $companies->website=$request->input('website');
        if (! Companies::exists("uploads/logo")) {
            Companies::makeDirectory("uploads/logo");
        }
        if($request->hasFile('logo'))
        {
            $file=$request->file('logo');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/logo/',$filename);
            $companies->logo=$filename;
        }     
        $companies->save();
        return response()->json($companies);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // dd('test');

        $companies=DB::table('companies')
        ->join('employees','employees.company_id','=','companies.id')
        ->select('employees.first_name','employees.email')
        ->where('company_id',"=",'3')
        ->get();
        return response()->json($companies);
        
        // $companieslist = Companies::find($id);
        // return response()->json(['companies' => $companieslist],200);
    
    }

    /**
     * 
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companies = Companies::find($id);
        return response()->json(['companies' => $companies],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $company_id)
    {
        $companies= Companies::find($company_id);
        $companies->name=$request->input('name');
        $companies->email=$request->input('email');
        $companies->website=$request->input('website');
        $companies->logo=$request->input('logo');
        $companies->save();
        return redirect('/companies');
        return response()->json($companies);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Companies::where('id',$id)->delete();
        return response()->json(['success'=>'company deleted successfully']);
    }
}


