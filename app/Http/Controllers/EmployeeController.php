<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Validator;
use  RealRashid\SweetAlert\SweetAlertServiceProvider ;
use RealRashid\SweetAlert\Facades\Alert;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        
        $employees = Employee::latest()->paginate(10);
      
        return view('index2.index2',compact('employees'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
       return view('index2.create');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
      /*  $request->validate([
            'name' => 'required',
            'email'=>'required',
            'password' =>'required|min:8|confirmed',
            'userGroup'=>'required',
            'contact'=>'required|min:8,',
            'address'=>'required',
           
        ]);*/
        

        $validator=Validator::make($request->all(),[
            'name' => 'required',
            'email'=>'required',
            'password' =>'required|min:8|confirmed',
            'userGroup'=>'required',
            'contact'=>'required|min:8,',
            'address'=>'required',
        ]);

        if ($validator->fails()) {
           
           Alert::error('Error Title', $validator->errors()->all());
           return back()->withErrors($validator)            
                        ->withInput();
        }
        

        if($request->hasFile('user-image')){
            $image=$request->file('user-image');
            $image->move('images',$image->getClientOriginalName());
            $imageName=$image->getClientOriginalName();
            $request['image']=$imageName;
            $request['password'] = bcrypt($request->password);
        }

       
        $newEmployee = new Employee();
        $newEmployee->create($request->all());
        
        alert()->html("employee created successfully.",'<a href="/employee"  class="btn btn-primary"> Back </a> 
        <a href="/employee/create"  class="btn btn-primary"> stay</a>',"success");
        return back();
                        //->withSuccess('employee created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('index2.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('index2.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $validator=Validator::make($request->all(),[
            'name' => 'required',
            'email'=>'required',
            'password' =>'required|min:8|confirmed',
            'userGroup'=>'required',
            'contact'=>'required|min:8,',
            'address'=>'required',
        ]);

        if ($validator->fails()) {
           
           Alert::error('Error Title', $validator->errors()->all());
           return back()->withErrors($validator)            
                        ->withInput();
        }
        

        if($request->hasFile('user-image')){
            $image=$request->file('user-image');
            $image->move('images',$image->getClientOriginalName());
            $imageName=$image->getClientOriginalName();
            $request['image']=$imageName;
            
        }
        $request['password'] = bcrypt($request->password);

      
        
        $employee->update($request->all());
        alert()->html("employee created successfully.",'<a href="/employee"  class="btn btn-primary"> Back </a> 
        <a href="/employee/edit"  class="btn btn-primary"> stay</a>',"success");
      
        return back();
               
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::find($id)->delete();
       
        return redirect()->route('employee.index')
                        ->with('success','Employee deleted successfully');
    }
}
