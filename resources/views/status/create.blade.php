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
            <h1> Tambah Status </h1>
            <div class="content-header"> </div>


            <!-- Main content -->
            <div class="content">
                <div class="card card-info-outline">


                    <div class="card-body">
                        <form action="{{ route('save-status') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" id="nama_status" name="nama_status" class="form-control"
                                    placeholder="Nama Status" @error('nama_status') is-invalid @enderror>
                                @error('nama_status')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="number" id="batas_buku" name="batas_buku" class="form-control"
                                    placeholder="Batas Buku"@error('batas_buku') is-invalid @enderror>
                                @error('batas_buku')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="number" id="batas_hari" name="batas_hari" class="form-control"
                                    placeholder="Batas Hari"@error('batas_hari') is-invalid @enderror>
                                @error('batas_hari')
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
