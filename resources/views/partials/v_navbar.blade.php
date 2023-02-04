<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
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
            </li>
            <!-- Notifications Dropdown Menu -->
            {{-- < class="nav-item dropdown">
                       <a class="nav-link" data-toggle="dropdown" href="#">
                           <i class="far fa-bell"></i>
                           <span class="badge badge-warning navbar-badge">15</span>
                       </a>
                   <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                       <span class="dropdown-header">15 Notifications</span>
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
                   </div> --}}
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    {{-- <img src="{{ asset('v_templates_lte') }}/dist/img/user2-160x160.jpg" class="user-image img-circle elevation-2" alt="User Image"> --}}
                    <span class="d-none d-md-inline">{{ ucfirst(Auth::user()->name) }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <li class="user-header bg-primary">
                        <h4>{{ ucfirst(Auth::user()->name) }}</h4>
                        {{-- <img src="{{ asset('v_templates_lte') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
                        <p>
                            <small>{{ Auth::user()->role->fullname }}</small>
                        </p>
                    </li>
                    <li class="user-footer">
                        <form action="{{ route('auth.logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-default btn-flat float-right">Sign out</button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->
