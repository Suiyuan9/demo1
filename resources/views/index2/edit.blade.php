@extends('layouts.heade1')

@section('content')
<div class="content-wrapper" style="margin-left: 0">
    <!-- Content Header (Page header) -->
    <section class="content-header" >
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Edit User</h1>
          </div>
          
        </div>
        <div class="row">
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-left">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('employee.index') }}">User Listing</a></li>
                  <li class="breadcrumb-item active">Edit User</li>
                </ol>
              </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <form action="{{ route('employee.update',$employee->id) }}" method="POST">
        @csrf
        @method('PUT')
@include('index2.fields')


    </form>
<div class="footer">
    <div class="float-right d-none d-sm-inline-block">
      <b></b> P000004
    
    </div>
  </div>
</div>
@include('footerJS.create')



@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

  @include('sweetalert::alert')
  
@endsection
