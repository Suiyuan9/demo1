<section class="content">
    <div class="container">
        
        

      
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Quick Example <small>jQuery Validation</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm">
              <div class="card-body">
                
                  <!--name-->
                <div class="form-group">
                  <div class="row justify-content-between" > 
                    <label for="exampleInputEmail1">User Name*</label>
                    <div class="col-md-4">
                    <input type="name" name="name" class="form-control" id="exampleInputName" placeholder="Enter name">
                  </div>


                  <!--email-->
                  <label for="exampleInputEmail1">Email address</label>
                  <div class="col-md-4">
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                </div>
                </div>
                

                <div class="form-group">
                  <!--password-->
                  <div class="row justify-content-between" > 
                    <label for="exampleInputPassword1">Password *</label>
                    <div class="col-md-4">
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
                  </div>

                  <!--group-->
                  <label>User Group</label>
                <div class="col-md-4">
                  <select class="form-control " style="width: 100%;">
                    <option value="staff">Staff</option>
                    <option value="manager">Manager</option>
                    <!--<option disabled="disabled">California (disabled)</option>-->
                    <option value="admin">admin</option>
                    
                  </select>
                </div>
                </div>
                
                  
                
                </div>


               
              

              <div class="form-group">
                <!--date-of-birthday-->
                <div class="row  justify-content-between" > 
                  <label >Date of Birthday*</label>
                  <div class="col-md-3">
                    <div class="input-group date" id="reservationdatetime" data-target-input="nearest" >
                      <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                      <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime"/>
                      
                  </div>
                    
                </div>

                <!--Phone-->
                <label>Phone :</label>
                  <div class="col-md-4">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                      </div>
                      <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                    </div>
                    <!---->        
                </div>
                
              </div>
           
              </div>

              

                <div class="form-group mb-0">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                    <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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