
    
        <!-- Preloader  刷新后出的animation-->
       <!-- <div class="preloader flex-column justify-content-center align-items-center">
             <img class="animation__shake" src="backend/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>-->

        <!-- Navbar -->
  
    <!-- Left navbar links 左边 -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('home') }}" class="nav-link">Home</a>
      </li>
      <!--<li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>-->
    </ul>

    <!-- Right navbar links 右边 -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
   <!--   <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>-->
        <!--search-->
        <!--<div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>-->

      <!-- Messages Dropdown Menu 
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">-->
            <!-- Message Start 
            <div class="media">
              <img src="/backend/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>-->
            <!-- Message End 
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">-->
            <!-- Message Start 
            <div class="media">
              <img src="backend/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>-->
            <!-- Message End 
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">-->
            <!-- Message Start 
            <div class="media">
              <img src="backend/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>-->
            <!-- Message End 
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>-->
      <!-- Notifications Dropdown Menu 通知 
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>-->

      <li class="nav-item">
        <a class="nav-link" style="text-align: right" href="#" role="button">
         {{ Auth::user()->name }}
        </a>
        <span class="float-right text-muted text-sm">logged in {{ Auth::user()->last_login_time }}</span>
      </li>

     <!-- <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>-->


      <li class="nav-item dropdown"><!--要改成图像-->
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user" ></i>
          <i class="fas fa-caret-square-down"></i><!--user img-->
        </a>
     
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

          <a href="{{ route('home') }}" class="dropdown-item">
            <i class="fas fa-user"></i> <span style="padding-left: 8px">{{ Auth::user()->name }}</span>
            
          </a>



          <div class="dropdown-divider"></div>
          <div class="dropdown-item">
            <i class="far fa-clock"></i> <span style="padding-left: 8px">Login at</span>
            <span class="float-right text-muted text-sm">{{ Auth::user()->last_login_time }}</span>
          </div>
         

          <div class="dropdown-divider"></div>
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          
          <img src="backend/dist/img/logout.svg" alt="logout"  width="15px" height="15px" style="margin-left: 12px">
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
     @include('layouts.sidebar')
