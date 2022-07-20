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
            <h1> Detail Peminjaman Buku </h1>
            <div class="content-header"> </div>


            <!-- Main content -->
            <div class="content">
                <div class="card card-info-outline">


                    <div class="card-body">
                        <form action="{{ route('update-peminjam',$peminjam->id) }}" method="post">
                            @csrf
                            <label for="judul_buku">Nama Peminjam</label> <br>
                            <div class="form-group">
                                <select class="form-control select2" style="width:100%;" name="id_anggota"
                                    disabled="true">
                                    <option value="">--Pilih Nama Peminjam--</option>
                                    @foreach ($datas2 as $anggota)
                                        {{-- <option value="{{ $anggota->id }}">{{ $anggota->nama_anggota }}</option> --}}
                                        <option value="{{ $anggota->id }}"
                                            {{ $peminjam->id_anggota == $anggota->id ? 'selected' : '' }}>
                                            {{ $anggota->nama_anggota }} </option>
                                    @endforeach
                                </select>

                            </div>

                            <label for="judul_buku">Judul Buku</label> <br>
                            <div class="form-group">

                                <select class="form-control select2" style="width:100%;" name="id_buku" id="id_buku"
                                    @error('id_buku') is-invalid @enderror disabled="true">
                                    <option value="">--Pilih Buku--</option>
                                    @foreach ($datas3 as $buku)
                                        {{-- <option value="{{ $buku->id }}">{{ $buku->judul_buku }}</option> --}}
                                        <option value="{{ $buku->id }}"
                                            {{ $peminjam->id_buku == $buku->id ? 'selected' : '' }}>
                                            {{ $buku->judul_buku }} </option>
                                    @endforeach
                                </select>

                            </div>

                            <label for="stok">Petugas Perpustakaan</label> <br>
                            <div class="form-group">

                                <select class="form-control select2" style="width:100%;" name="id_pengguna"
                                    id="id_pengguna" @error('id_pengguna') is-invalid @enderror disabled="true">
                                    <option value="">--Pilih Nama Petugas--</option>
                                    @foreach ($datas1 as $petugas)
                                        <option value="{{ $petugas->id }}"
                                            {{ $peminjam->id_pengguna == $petugas->id ? 'selected' : '' }}>
                                            {{ $petugas->name }} </option>
                                        {{-- <option value="{{ $petugas->id }}">{{ $petugas->name }}</option> --}}
                                    @endforeach
                                </select>

                            </div>

                            <label for="stok">Tanggal Peminjaman</label> <br>
                            <div class="form-group">
                                <input type="date" id="tgl_pinjam" name="tgl_pinjam" class="form-control"
                                    disabled="true" placeholder="Tanggal" @error('tgl_pinjam') is-invalid @enderror
                                    value="{{ $peminjam->tgl_pinjam }}">

                            </div>
                            <label for="stok">Tanggal Kembali</label> <br>
                            <div class="form-group">
                                <input type="date" id="tgl_kembali" name="tgl_kembali" class="form-control" placeholder="Kategori" value="{{ $peminjam->tgl_kembali }}">
                            </div>

                            <label for="id_denda">Jenis Permasalahan</label> <br>
                            <div class="form-group">

                                <select class="form-control select2" style="width:100%;" name="id_denda" id="id_denda"
                                    @error('id_denda') is-invalid @enderror >
                                    <option value="">--Denda--</option>
                                     @foreach ($denda as $dendas)
                                {{-- <option value="{{ $buku->id }}">{{ $buku->judul_buku }}</option> --}}
                                <option value="{{ $dendas->id }}">{{ $dendas->nama }}
                                    {{ $dendas->jumlah_denda }}</option>
                                @endforeach
                                </select>

                            </div>
                            <div class="form-group">
                                <input type="text" id="keterangan" name="keterangan" class="form-control"
                                    placeholder="keterangan" @error('keterangan') is-invalid @enderror ">

                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success" onclick="return confirm('Are you sure?')">>Simpan Data </button>
                            </div>
                        </form>

                    </div>




                </div>

                <!-- REQUIRED SCRIPTS -->
                @include('layouts.script')
</body>

</html>
