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
            <h1> Tambah Penerbit </h1>
            <div class="content-header"> </div>


            <!-- Main content -->
            <div class="content">
                <div class="card card-info-outline">

                    <div class="card-body">
                        <form action="{{ route('save-penerbit') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" id="nama_penerbit" name="nama_penerbit" class="form-control"
                                    placeholder="Nama Penerbit" @error('nama_penerbit') is-invalid @enderror>
                                @error('nama_penerbit')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <input type="text" id="alamat" name="alamat" class="form-control"
                                    placeholder="Alamat Penerbit" @error('alamat') is-invalid @enderror>
                                @error('alamat')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="number" id="telp_hp" name="telp_hp" class="form-control"
                                    placeholder="No.Telf" @error('telp_hp') is-invalid @enderror>
                                @error('telp_hp')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" id="email" name="email" class="form-control"
                                    placeholder="Email" @error('email') is-invalid @enderror>
                                @error('email')
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
