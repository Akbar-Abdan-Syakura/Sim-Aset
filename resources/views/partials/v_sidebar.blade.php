    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/" class="brand-link">
            <img src="{{ asset('images/logoperusahaan.JPG') }}" alt="" class="brand-image img-circle elevation-3"
                style="opacity: 1">
            <span class="brand-text font-weight-light">SIM ASET</span>
        </a>
        <!-- /.brandlogo-->

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- Sidebar Search Form -->
            <form class="form-inline">
                <div class="input-group">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <!-- /.sidebar search form -->
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fab fa-mdb"></i>
                            <p>
                                Master Data
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('user') }}" class="nav-link">
                                    <i class="fas fa-users nav-icon"></i>
                                    <p>Data User</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('aset') }}" class="nav-link">
                                    <i class="fas fa-archive nav-icon"></i>
                                    <p> Data Aset </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('monitoring') }}" class="nav-link">
                                    <i class="nav-icon fas fa-eye"></i>
                                    <p>Data Monitoring Aset</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('cabang') }}" class="nav-link">
                                    <i class="fas fa-building nav-icon"></i>
                                    <p>Data Kantor Cabang</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('rekomendasi') }}" class="nav-link">
                            <i class="nav-icon fas fa-lightbulb"></i>
                            <p>
                                Data Rekomendasi Aset
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('pengajuan') }}" class="nav-link">
                            <i class="nav-icon fas fa-sticky-note"></i>
                            <p>
                                Data Pengajuan Aset
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
