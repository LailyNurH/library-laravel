<!DOCTYPE html>
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
        <div class="content-wrapper">

            <div class="content-header"> </div>


            <!-- Main content -->
            <div class="content">
                <div class="card card-info-outline">
                    <div class="card-header">
                        <h4> Data Pengembalian Buku </h4>
                        <div class="card-tools">

                        </div>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    #
                                </td>
                                <th>Nama Peminjam</th>
                                <th>Nama Buku </th>
                                <th> Tanggal Meminjam </th>
                                <th> Tanggal Kembali </th>
                                <th> Petugas Perpustakaan </th>
                                <th> Status</th>
                                <th> Total Denda </th>

                                <th> Action </th>
                            </tr>
                            @foreach ($datas as $data)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <th>
                                        @foreach ($datas2 as $anggota)
                                            @if ($data->id_anggota == $anggota->id)
                                                {{ $anggota->nama_anggota }}
                                            @endif
                                        @endforeach
                                    </th>
                                    <th>
                                        @foreach ($datas3 as $buku)
                                            @if ($data->id_buku == $buku->id)
                                                {{ $buku->judul_buku }}
                                            @endif
                                        @endforeach
                                    </th>

                                    <th> {{ $data->tgl_pinjam }}</th>
                                    <th> {{ $data->tgl_kembali }}</th>
                                    <th>
                                        @foreach ($datas1 as $petugas)
                                            @if ($data->id_pengguna == $petugas->id)
                                                {{ $petugas->name }}
                                            @endif
                                        @endforeach
                                    </th>
                                    <th>
                                        <span class="badge badge-success" style="font-size: 14px"> {{ $data->status }}</span>
                                       </th>
                                       <th>  {{ $data->total_denda }}  </th>
                                    <th> <a href="{{ url('update-status-buku', $data->id )}}" ><i class="fa fa-eye"></i></a>
                                        {{-- <a href="{{ url('delete-kategori', $data->id) }}"><i
                                                class="btn" style="color: red"></i></a> --}}
                                    </th>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.content-wrapper -->

                </div>

            </div>

            <div class="card-footer">
                {{-- {{ $datas->links() }} --}}
            </div>
        </div>
    </div>


    <!-- REQUIRED SCRIPTS -->
    @include('layouts.script')


    @include('sweetalert::alert')
</body>

</html>
