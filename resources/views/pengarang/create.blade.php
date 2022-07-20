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
            <h1> Tambah Pengarang </h1>
            <div class="content-header"> </div>


            <!-- Main content -->
            <div class="content">
                <div class="card card-info-outline">

                    <div class="card-body">
                        <form action="{{ route('save-pengarang') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" id="nama_pengarang" name="nama_pengarang" class="form-control"
                                    placeholder="Nama Pengarang"@error('nama_pengarang') is-invalid @enderror>

                                @error('nama_pengarang')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <input type="text" id="alamat" name="alamat" class="form-control"
                                    placeholder="Alamat Pengarang" @error('alamat') is-invalid @enderror>
                                @error('alamat')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="number" id="no_hp" name="no_hp" class="form-control"
                                    placeholder="No.Telf" @error('no_hp') is-invalid @enderror>
                                @error('no_hp')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Simpan Data </button>
                            </div>
                        </form>

                    </div>




                </div>

                <!-- REQUIRED SCRIPTS -->
                @include('layouts.script')
</body>

</html>
