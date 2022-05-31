<section class="content">
    <div class="container">
        
        

      
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              
              @if (isset($employee))
              <h3 class="card-title">Edit User :{{ $employee->name }}</h3>
              @else <h3 class="card-title">Add New User</h3>
              @endif
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm">
              <div class="card-body">
                
                  <!--name
                <div class="form-group">
                  <div class="row justify-content-between" > 
                    <div class="col-md-2">
                    <label for="exampleInputEmail1">User Name*</label>
                    </div>
                    <div class="col-md-4">
                    <input type="name" name="name" class="form-control" id="exampleInputName" placeholder="Enter name">
                  </div>-->


                  <!--email
                  <div class="col-md-2">
                  <label for="exampleInputEmail1">Email address</label>
                  </div>
                  <div class="col-md-4">
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                </div>
                </div>-->
                 
                <div class="form-group">
                  <div class="row  justify-content-between" > 
                    <div class="col-md-4">
                    <label >User Name<span>*</span></label>
                    </div>
                    <div class="col-md-4">
                      <label for="exampleInputPassword1">Password</label>
                  </div>
                  
                  <div class="col-md-4">
                    <label for="password-confirm">Confirm Password</label>
                </div>
                  </div>
                
                
                  <!--input-->
                  
                    <div class="row  mb-3 justify-content-between" >
                    
                      <div class="col-md-4">
                      
                         @if (isset($employee))
                         <input type="name" name="name" class="form-control" id="exampleInputName" placeholder="Enter name" value="{{ $employee->name }}" required autocomplete="name" autofocus >
                         <span class="text-danger">@error('name') {{ $errors->first('name') }} @enderror</span>
                       </div>
                       <input type = "hidden" class = "deletebtn_id" value = "{{ $employee->id}}">
                       <div class="col-md-4">
                         <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"  id="exampleInputPassword1" placeholder="Password" value="{{ $employee->password }}" required autocomplete="current-password">
                         <span class="text-danger">@error('password') {{ $errors->first('password') }} @enderror</span>
                     </div>
                     
                     <div class="col-md-4">
                       <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" value="{{ $employee->password }}" placeholder="Confirm Password" >
                       <span class="text-danger">@error('password_confirmation') {{ $errors->first('password_confirmation') }} @enderror</span>
                   </div>
                         @else

                         <input type="name" name="name" class="form-control" id="exampleInputName" placeholder="Enter name" value="{{ old('name') }}" required autocomplete="name" autofocus >
                        <span class="text-danger">@error('name') {{ $errors->first('name') }} @enderror</span>
                      </div>
                      <div class="col-md-4">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"  id="exampleInputPassword1" placeholder="Password" value="{{ old('password') }}" required autocomplete="current-password">
                        <span class="text-danger">@error('password') {{ $errors->first('password') }} @enderror</span>
                    </div>
                    
                    <div class="col-md-4">
                      <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" >
                      <span class="text-danger">@error('password_confirmation') {{ $errors->first('password_confirmation') }} @enderror</span>
                  </div>
                         @endif
                       
                        
                  
                    </div>
                  </div>
                
                <!--end input-->


                <div class="form-group">
                  <div class="row  justify-content-between" > 
                    <div class="col-md-8">
                      <label for="exampleInputEmail1">Email address</label>
                    </div>
                  
                  <div class="col-md-4">
                    <label >Contact</label>
                </div>
                  </div>


                
                  <!--password-->
                  <div class="row  mb-3 justify-content-between" > 
                    <div class="col-md-8">
                      <input type="email" name="email" class="form-control " id="exampleInputEmail1" placeholder="Enter email" value="@if(isset($employee)){{ $employee->email }}@else{{ old('email') }}@endif" required autocomplete="email" autofocus>
                      <span class="text-danger">@error('email') {{ $errors->first('email') }} @enderror</span>
                    </div>
            
                  <div class="col-md-4">
                     <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                      </div>
                      <input type="text" name="contact" class="form-control" data-inputmask='"mask": "(999) 9999-9999"' data-mask value="@if(isset($employee)){{ $employee->contact }}@endif">
                    </div>
                    <!---->  
                </div>
                  </div>

                </div>


                <!--group-->
                <div class="form-group">
                  <div class="row  justify-content-between" > 
                    <div class="col-md-12">
                      <label>User Address</label>
                    </div>
                  </div>
                  

                   <!--input-->
                  
                    <div class="row  justify-content-between" > 
                      <div class="col-md-12">
                        <input type="address" name="address" class="form-control " id="address" placeholder="Enter address" value="@if(isset($employee)){{ $employee->address }}@else{{ old('address') }}@endif" required autocomplete="address" autofocus>
                        <span class="text-danger">@error('address') {{ $errors->first('address') }} @enderror</span>
                      </div>
                      <!---->
                    </div>
                    </div>

                    <!--group-->
                <div class="form-group">
                  <div class="row  justify-content-between" > 
                    <div class="col-md-4">
                      <label>Calender</label>
                    </div>

                    <div class="col-md-4">
                      <label></label>
                    </div>

                    
                    <div class="col-md-4">
                      <label >User Group</label>
                    </div>

                  </div>
                  

                   <!--input-->
                  
                    <div class="row  mb-3 justify-content-between" > 
                      <div class="col-md-4">
                        <div class="input-group">
                          <button type="button" class="btn btn-default float-right" id="daterange-btn">
                            <i class="fa fa-calendar"></i> Date range picker
                            <i class="fas fa-caret-down"></i>
                          </button>
                        </div>
                      </div>
                      
                      <div class="col-md-4">
                      <div id="reportrange">
                        <span ></span>
                      </div>
                      </div>

                      <div class="col-md-4">
                        <select class="form-control " name="userGroup" style="width: 100%;" >
                      @if (isset($employee))
                          <option value="{{ $employee->userGroup }}">{{ $employee->userGroup }}</option>
                        
                      @endif
                        <option value="staff">Staff</option>
                        <option value="manager">Manager</option>
                        <!--<option disabled="disabled">California (disabled)</option>-->
                        <option value="admin">admin</option>
                        
                      </select>
                  </div>
  

                    </div>
                    </div>

                    <!-- image-->
                    <div class="form-group">
                      <div class="row " >
                        <div class="col-md-12">
                          <label>Image</label>
                        </div>
                       </div>
                    

                   

                    
                      <div class="row " >
                        <div class="col-md-12">
                         <div class="drop-zone">
                           <span class="drop-zone__prompt">Drop file here or click to upload</span>
                           <input type="file" name="image" class="drop-zone__input" accept="image/png, image/jpeg,image/jpg, image/gif, image/svg" value="@if(isset($employee)){{ $employee->image }}@endif" >
                         </div>
                        </div>
                       </div>
                    </div>

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
              
                 <div class="row " >
                  <div class="col-md-10">
                  <a class="btn  btn-info btn-lg " style="float:right;   href="{{ route('employee.index') }}">Back</a>
               
                  </div>
                  @if(isset($employee))
                  <a href="" class="btn  btn-warning btn-lg " style="float:right;margin-right:1%;"  >Clear</a>
                  @else
                  <a href="{{ route('employee.create') }}" class="btn  btn-warning btn-lg " style="float:right;margin-right:1%;"  >Clear</a>
                  @endif
                 
                  @if (isset($employee))
                  <button type="submit" class="btn btn-success" id="submitForm" style="float:right;">Submit</button>
                 
                  
                 
                  @else
                  <button type="submit" class="btn btn-success" id="submitButton" style="float:right;">Submit</button>
                  @endif
                
                 </div>
              </div>
            </form>
          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

  
  