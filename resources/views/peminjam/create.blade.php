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
            <h1> Tambah Data Peminjaman Buku </h1>
            <div class="content-header"> </div>


            <!-- Main content -->
            <div class="content">
                <div class="card card-info-outline">


                    <div class="card-body">
                        <form action="{{ route('save-peminjam') }}" method="post">
                            @csrf
                            <label for="judul_buku">Nama Peminjam</label> <br>
                            <div class="form-group">

                                <select class="form-control select2" style="width:100%;" name="id_anggota"
                                    id="id_anggota" @error('id_anggota') is-invalid @enderror>
                                    <option value="">--Pilih Nama Peminjam--</option>
                                    @foreach ($datas2 as $anggota)
                                        <option value="{{ $anggota->id }}">{{ $anggota->nama_anggota }}</option>
                                    @endforeach
                                </select>
                                @error('id_anggota')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>

                            <label for="judul_buku">Judul Buku</label> <br>
                            <div class="form-group">

                                <select class="form-control select2" style="width:100%;" name="id_buku"
                                    id="id_buku" @error('id_buku') is-invalid @enderror>
                                    <option value="">--Pilih Buku--</option>
                                    @foreach ($datas3 as $buku)
                                        <option value="{{ $buku->id }}">{{ $buku->judul_buku }}</option>
                                    @endforeach
                                </select>
                                @error('id_buku')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>

                            <label for="stok">Petugas Perpustakaan</label> <br>
                            <div class="form-group">

                                <select class="form-control select2" style="width:100%;" name="id_pengguna"
                                    id="id_pengguna" @error('id_pengguna') is-invalid @enderror>
                                    <option value="">--Pilih Nama Petugas--</option>
                                    @foreach ($datas1 as $petugas)
                                        <option value="{{ $petugas->id }}">{{ $petugas->name }}</option>
                                    @endforeach
                                </select>
                                @error('id_pengguna')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>

                            <label for="stok">Tanggal Peminjaman</label> <br>
                            <div class="form-group">
                                <input type="date" id="tgl_pinjam" name="tgl_pinjam" class="form-control"
                                    placeholder="Tanggal" @error('tgl_pinjam') is-invalid @enderror>
                                    @error('tgl_pinjam')
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
