<ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{ route('home') }}" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li>
  </ul>

  <!-- Right navbar links 右边 -->
  <ul class="navbar-nav ml-auto">
    

    <li class="nav-item">
      <a class="nav-link" style="text-align: right" href="#" role="button">
       {{ Auth::user()->name }}
      </a>
      <span class="float-right text-muted text-sm">logged in {{ Auth::user()->last_login_time }}</span>
    </li>

   


    <li class="nav-item dropdown"><!--要改成图像-->
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="fas fa-user" ></i>
        <i class="fas fa-caret-square-down"></i><!--user img-->
      </a>
    
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

        <a href="{{ route('home') }}" class="dropdown-item">
          <i class="fas fa-user"></i> <span style="padding-left: 8px">{{ Auth::user()->name }}</span>
          
        </a>


        
        </a>


        <div class="dropdown-divider"></div>
        <div class="dropdown-item">
          <i class="far fa-clock"></i> <span style="padding-left: 8px">Login at</span>
          <span class="float-right text-muted text-sm">{{ Auth::user()->last_login_time }}</span>
        </div>
       

        <div class="dropdown-divider"></div>
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <img src="../../backend/dist/img/logout.svg" alt="logout"  width="15px" height="15px" style="margin-left: 12px">
      <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
      </a>
    </div>
        </div>

        


      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
      
        
      
    </li>
  </ul>

  

   <!-- Main Sidebar Container -->
   @include('layouts.sidebar_inside')