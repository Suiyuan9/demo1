@extends('layouts.heade1')

@section('content')

<div class="content-wrapper" style="margin-left: 0">
    <!-- Content Header (Page header) -->
    <section class="content-header" >
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

@include('index2.fields')



<div class="footer">
    <div class="float-right d-none d-sm-inline-block">
      <b></b> P000003
    
    </div>
  </div>
</div>
@include('footerJS.create')





@endsection