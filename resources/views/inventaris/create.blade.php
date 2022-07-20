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
            <h1> Tambah Data Inventaris Buku </h1>
            <div class="content-header"> </div>


            <!-- Main content -->
            <div class="content">
                <div class="card card-info-outline">


                    <div class="card-body">
                        <form action="{{ route('save-inventaris') }}" method="post">
                            @csrf
                            <label for="judul_buku">Judul Buku</label> <br>
                            <div class="form-group">

                                <select class="form-control select2" style="width:100%;" name="id_buku" id="id_buku" @error('id_buku') is-invalid @enderror>
                                    <option value="">--Pilih Judul Buku--</option>
                                    @foreach ($dtbuku as $buku)
                                        <option value="{{ $buku->id }}">{{ $buku->judul_buku }}</option>
                                    @endforeach
                                </select>
                                @error('id_buku')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <label for="stok">Tanggal Masuk</label> <br>
                            <div class="form-group">
                                <input type="date" id="tgl_masuk" name="tgl_masuk" class="form-control"
                                    placeholder="Tanggal" @error('tgl_masuk') is-invalid @enderror>
                                @error('tgl_masuk')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <label for="stok">Status Buku</label> <br>
                            <div class="form-group">
                                <input type="text" id="status_buku" name="status_buku" class="form-control"
                                    placeholder="Status Buku" @error('status_buku') is-invalid @enderror>
                                @error('status_buku')
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
