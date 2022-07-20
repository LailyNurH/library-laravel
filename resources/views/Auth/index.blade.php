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
                        <h4> Data User </h4>
                        <div class="card-tools">
                            <a href="{{ route('create-user') }}" class="btn btn-success">Tambah Data <i
                                    class="fas da-plus-square"></i></a>
                        </div>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    #
                                </td>
                                <th>Foto</th>
                                <th>Nama Pengguna</th>
                                <th>NIP</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>Nomor Hp</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($dtuser as $data)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <th> <img src="{{ asset('img/' . $data->foto) }}" height="60%" width="60%"
                                            alt="" srcset="">
                                    </th>
                                    <th> {{ $data->name }} </th>
                                    <th> {{ $data->nip }} </th>
                                    <th> {{ $data->alamat }}</th>
                                    <th> {{ $data->email }} </th>
                                    <th> {{ $data->no_hp }} </th>


                                    <th> <a href="{{ url('edit-user', $data->id) }}"><i
                                                class="fas fa-pencil-alt text-red-400 mr-1"></i></a>
                                        <a href="{{ url('delete-user', $data->id) }}"><i
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

            </div>
        </div>
    </div>


    <!-- REQUIRED SCRIPTS -->
    @include('layouts.script')


    @include('sweetalert::alert')
</body>

</html>
