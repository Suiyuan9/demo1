@extends('layouts.heade')

@section('content')
<!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User Listing</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                @if(app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName()=="home")
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>

                @elseif (app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName()=="index3")
              <li class="breadcrumb-item"><a href="{{ route('index3') }}">Dashboard v3</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
                @else
                <li class="breadcrumb-item active">Dashboard v2</li>
              @endif

            </ol>
            
          </div><!-- /.col -->
          
        </div><!-- /.row -->
        <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="pull-right"><a class="btn btn-primary float-sm-right" style="" href="{{ route('employee.create') }}">Add New Record</a></h1>
          </div>
      </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->
        
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row ">
          <div class="col-sm-12">
            <div class="card">
            @include('index2.table')
          </div>
        </div>
      </div>
      </div>
    </section>


    <!-- /.content -->
  
  <!-- /.content-wrapper -->


<div class="footer">
  <div class="float-right d-none d-sm-inline-block">
    <b></b> P000002
  
  </div>
</div>

<!-- REQUIRED SCRIPTS -->
@include('footerJS.footer2')


@endsection



</body>
</html>
