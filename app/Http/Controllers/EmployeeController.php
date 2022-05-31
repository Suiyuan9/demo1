<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
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
    public function index(Request $request)
    {
        if($request->filled('search')){
            $employees = Employee::search($request->search)->paginate(10);
           
        }
        
       else{ 
           $employees = Employee::latest()->paginate(10);
       }
        return view('backend.employee.index2',compact('employees'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
       return view('backend.employee.create');
    
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
            'image'=>'required|max:2048',
        ]);

        if ($validator->fails()) {
           
           Alert::error('Error Title', $validator->errors()->all());
           return back()->withErrors($validator)            
                        ->withInput();
        }
        $image=$request->file('image');
        $imageName=$image->getClientOriginalName();
        $image->move(public_path('public/images'),$imageName);
        //
        $newEmployee = new Employee();
        $newEmployee->name=$request->name;
        $newEmployee->email=$request->email;
        $newEmployee->userGroup=$request->userGroup;
        $newEmployee->password=$request->password;
        $newEmployee->contact=$request->contact;
        $newEmployee->address=$request->address;
        $newEmployee->image=$imageName;
        $newEmployee->save();
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
        return view('backend.employee.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('backend.employee.edit',compact('employee'));
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
        /*if(Hash::check($request->input('password_confirmation')&& $request->input('password'), $employee->password)){
            return 'true';
        }
        else{
            return 'false';
        }*/
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

        if($request->hasFile('image')!=''){
            $image=$request->file('image');
            $image->move(public_path('public/images'),$image->getClientOriginalName());
            $imageName=$image->getClientOriginalName();
            $request['image']=$imageName;
            //$request['password'] = bcrypt($request->password);
            
            $employee->update($request->all());
            $employee->update(['image'=>$imageName]);
            alert()->html("employee edited successfully.",'<a href="/employee"  class="btn btn-primary"> Back </a> 
            <a href=""  class="btn btn-primary"> stay</a>',"success");
          
            return back();
        }else{
        $employee->update($request->all());
       
        alert()->html("employee edited successfully.",'<a href="/employee"  class="btn btn-primary"> Back </a> 
        <a href=""  class="btn btn-primary"> stay</a>',"success");
      
        return back();
    }
               
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
       
        return back()
               ->with('success','Record has been delete successfully');
    }
}
