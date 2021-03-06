@extends('backend.layouts.heade1')

@section('content')

@if (Session::has('errors'))
<div class="alert alert-danger">
  {{ Session::get('errors') }}
</div>
  
@endif
    

<div class="content-wrapper" style="margin-left: 0">
    <!-- Content Header (Page header) -->
    <section class="content-header" >
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Create User <span style="font-size:18px;color:#869099">P000003</span></h1>
          </div>
          
        </div>
        <div class="row">
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-left">
                  <!--<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                  <li class="breadcrumb-item"><a href="{{ route('employee.index') }}">User Listing</a></li>
                  <li class="breadcrumb-item active">Create User</li>-->
                  {{ Breadcrumbs::render() }}
                </ol>
              </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
@include('backend.employee.fields')


    </form>

</div>
@include('backend.footerJS.create')



@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

  @include('sweetalert::alert')


@endsection