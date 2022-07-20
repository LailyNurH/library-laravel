<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    @include('layouts.header')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('layouts.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->

        <div class="content-header"> </div>


        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">


                <div class="content-wrapper mx-8">
                    <div class="card card-info-outline">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <div class="clearfix">
                                            <div class="float-left">
                                                <i class="fas fa-chart-line text-success fa-3x"></i>
                                            </div>
                                            <div class="float-right">
                                                <p class="mb-0 text-right">Transaksi</p>
                                                <div class="fluid-container">
                                                    <h3 class="font-weight-medium text-right mb-0">
                                                        {{ $totalPeminjam->count() }}</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-muted mt-3 mb-0">
                                            <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Total seluruh
                                            transaksi
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <div class="clearfix">
                                            <div class="float-left">
                                                <i class="fas fa-rocket text-danger fa-3x"></i>
                                            </div>
                                            <div class="float-right">
                                                <p class="mb-0 text-right">Sedang Pinjam</p>
                                                <div class="fluid-container">
                                                    <h3 class="font-weight-medium text-right mb-0">
                                                        {{ $totalPeminjam->where('status', 'dipinjam')->count() }}</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-muted mt-3 mb-0">
                                            <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> sedang dipinjam
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <div class="clearfix">
                                            <div class="float-left">
                                                <i class="fas fa-book-open text-info fa-3x"></i>
                                            </div>
                                            <div class="float-right">
                                                <p class="mb-0 text-right">Buku</p>
                                                <div class="fluid-container">
                                                    <h3 class="font-weight-medium text-right mb-0">{{ $buku->count() }}</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-muted mt-3 mb-0">
                                            <i class="mdi mdi-book mr-1" aria-hidden="true"></i> Total judul buku
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <div class="clearfix">
                                            <div class="float-left">
                                                <i class="far fa-user text-success fa-3x"></i>
                                                {{-- <i class="mdi mdi-account-location text-info icon-lg"></i> --}}
                                            </div>
                                            <div class="float-right">
                                                <p class="mb-0 text-right">Anggota</p>
                                                <div class="fluid-container">
                                                    <h3 class="font-weight-medium text-right mb-0">{{ $anggota->count() }}
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-muted mt-3 mb-0">
                                            <i class="mdi mdi-account mr-1" aria-hidden="true"></i> Total seluruh anggota
                                        </p>
                                    </div>
                                </div>
                            </div>


                                </div>
                        <div class="card-header">
                            <h4> Data Peminjaman Buku </h4>
                            <div class="card-tools">

                            </div>


                                <table class="table table-bordered">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            #
                                        </td>
                                        <th>Nama Peminjam</th>
                                        <th>Nama Buku </th>
                                        <th> Tanggal Meminjam </th>
                                        <th> Petugas Perpustakaan </th>
                                        <th> Status</th>
                                        <th> Action </th>
                                    </tr>
                                    @foreach ($dipinjam as $data)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <th>
                                                @foreach ($anggota as $anggotas)
                                                    @if ($data->id_anggota == $anggotas->id)
                                                        {{ $anggotas->nama_anggota }}
                                                    @endif
                                                @endforeach
                                            </th>
                                            <th>
                                                @foreach ($buku as $bukus)
                                                    @if ($data->id_buku == $bukus->id)
                                                        {{ $bukus->judul_buku }}
                                                    @endif
                                                @endforeach
                                            </th>

                                            <th> {{ $data->tgl_pinjam }}</th>
                                            <th>
                                                @foreach ($datas1 as $petugas)
                                                    @if ($data->id_pengguna == $petugas->id)
                                                        {{ $petugas->name }}
                                                    @endif
                                                @endforeach
                                            </th>
                                            <th> <span class="badge badge-danger" style="font-size: 14px"> {{ $data->status }}
                                                    </span>
                                            </th>
                                            <th> <a onclick="return confrim ('Apakah Buku yang di Kembalikan Sudah Sesuai ? ')"
                                                   href="{{ url('update-status-buku', $data->id )}}" class="btn btn-success">Dikembalikan<i
                                                    class="fas da-plus-square"></i></a>  </th>
                                        </tr>
                                    @endforeach
                                </table>


                        </div>
                    </div>

                </div>


                <!-- /.content-wrapper -->

                <div class="content">

                </div>
                <!-- /.content-wrapper -->

            </div>


        </div>

        <!-- REQUIRED SCRIPTS -->
        @include('layouts.script')
</body>

</html>
