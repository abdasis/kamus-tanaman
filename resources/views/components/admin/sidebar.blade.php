<aside class="main-sidebar sidebar-light-orange elevation-1">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link border-bottom border-light">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-1" style="opacity: .8">
        <span class="brand-text font-weight-light">HerbalQoe</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex border-light">
            <div class="image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-1" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Str::title(Auth::user()->name)}}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar border-0" type="search" placeholder="Keyword" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar border-0">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link active">
                        <i class="nav-icon fas fa-layer-group"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <p>
                            Statistik Pembaca
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-wine-bottle"></i>
                        <p>
                            Product
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('product.tambah')}}" class="nav-link active">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Tambah Produk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('product.semua')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Semua Product</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-leaf"></i>
                        <p>
                            Data Tanaman
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('tanaman.tambah')}}" class="nav-link active">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Tambah Tanaman</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('tanaman.semua')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Semua Tanaman</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Data Pengguna
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('pengguna.tambah')}}" class="nav-link active">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Tambah Pengguna</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('pengguna.semua')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Semua Pengguna</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Pengaturan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>General</p>
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
