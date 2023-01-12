    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/" class="brand-link">
            <img src="{{ asset('images/logoperusahaan.JPG') }}" alt="" class="brand-image img-circle elevation-3"
                style="opacity: 1">
            <span class="brand-text font-weight-light">SIM ASET</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('v_templates_lte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                        alt="User Image">
                </div>
                <div class="info">
                    <a href="/users" class="d-block">Admin (User Belum Beres)</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fab fa-mdb"></i>
                            <p>
                                Master Data
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/datauser" class="nav-link">
                                    <i class="fas fa-users nav-icon"></i>
                                    <p>Data User</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/dafaset" class="nav-link">
                                    <i class="fas fa-archive nav-icon"></i>
                                    <p> Data Aset </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="datacabang" class="nav-link">
                                    <i class="fas fa-building nav-icon"></i>
                                    <p>Data Kantor Cabang</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/dafmonitoring" class="nav-link">
                            <i class="nav-icon fab fa-watchman-monitoring"></i>
                            <p>
                                Data Monitoring Aset
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/dafrekomen" class="nav-link">
                            <i class="nav-icon fas fa-unlock-alt"></i>
                            <p>
                                Data Rekomendasi Aset
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-sticky-note"></i>
                            <p>
                                Data Pengajuan Aset
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/pengajuantambah" class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    <p>Pengajuan Penambahan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/pengajuanperbaikan" class="nav-link">
                                    <i class="fas fa-tools nav-icon"></i>
                                    <p>Pengajuan Perbaikan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/pengajuanganti" class="nav-link">
                                    <i class="fas fa-redo nav-icon"></i>
                                    <p>Pengajuan Pergantian</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
