<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">

        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->


        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item menu">

                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Buku
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('buku') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Buku</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pengarang') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Pengarang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('penerbit') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Penerbit</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kategori') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Kategori</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('anggota') }}"" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Anggota
                        </p>
                    </a>
                </li>
                <li class="nav-item menu">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Peminjaman
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('peminjam') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Peminjam</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pengembalian') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Pengembaliaan</p>
                            </a>
                        </li>
                    </ul>

                <li class="nav-item">
                    <a href="{{ route('status') }}"" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Status
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('denda') }}"" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Denda
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('inventaris') }}"" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Inventaris Buku
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('data-pengguna') }}"" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        Pengguna
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('inventaris') }}"" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                       Laporan
                      </p>
                    </a>
                  </li>
                  <br>
                  <br>
                  <li class="nav-item">
                    <a href="{{ route('postlogout') }}"" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                       Logout
                      </p>
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
