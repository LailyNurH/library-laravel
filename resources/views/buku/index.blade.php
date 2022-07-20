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
                        <h4> Data Kategori </h4>
                        <div class="card-tools">
                            <a href="{{ route('create-buku') }}" class="btn btn-info">Tambah Data <i
                                class="fas da-plus-square"></i></a>
                            <a href="{{ route('export') }}" class="btn btn-success">Export Excel <i class="fas da-plus-square"></i></a>
                        </div>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    #
                                </td>
                                <th> Foto </th>
                                <th>Judul Buku</th>
                                <th>Pengarang</th>
                                <th>Penerbit</th>
                                <th>Kategori</th>
                                <th>ISBN</th>
                                <th>Tahun Terbit</th>
                                <th>Bahasa</th>
                                <th>Stok</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($datas as $data)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <th>  <img src="{{ asset('img/'. $data->foto ) }}" height="60%" width="60%" alt="" srcset=""></th>
                                    <th> {{ $data->judul_buku }} </th>
                                    <th>
                                        @foreach ($datas2 as $pengarang)
                                            @if ($data->id_pengarang == $pengarang->id)
                                                {{ $pengarang->nama_pengarang }}
                                            @endif
                                        @endforeach
                                    </th>
                                    <th>
                                        @foreach ($datas1 as $penerbit)
                                         @if ($data->id_penerbit== $penerbit->id)
                                            {{ $penerbit->nama_penerbit }}
                                        @endif
                                    @endforeach
                                    </th>
                                    <th>
                                        @foreach ($datas3 as $kategori)
                                        @if ($data->id_kategori== $kategori->id)
                                           {{ $kategori->kategori}}
                                       @endif
                                   @endforeach
                                  </th>
                                    <th> {{ $data->ISBN }} </th>
                                    <th> {{ $data->tahun_terbit }} </th>
                                    <th> {{ $data->bahasa }} </th>
                                    <th> {{ $data->stok }} </th>

                                    <th> <a href="{{ url('edit-buku', $data->id) }}"><i
                                                class="fas fa-pencil-alt text-red-400 mr-1"></i></a>
                                        <a href="{{ url('delete-buku', $data->id) }}"><i
                                                class="fas fa-trash-alt text-red-400 mr-1" style="color: red"></i></a>
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
