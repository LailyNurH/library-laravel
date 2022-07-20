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
            <h1> Tambah Anggoata </h1>
            <div class="content-header"> </div>


            <!-- Main content -->
            <div class="content">
                <div class="card card-info-outline">


                    <div class="card-body">
                        <form action="{{ route('save-buku') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label for="stok">Judul Buku </label> <br>
                            <div class="form-group">
                                <input type="text" id="judul_buku" name="judul_buku" class="form-control"
                                    placeholder="Judul Buku" @error('judul_buku') is-invalid @enderror>
                                @error('judul_buku')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <label for="pengarang">Pilih Pengarang :</label> <br>
                            <div class="form-group">
                                <select class="form-control select2" style="width:100%;" name="id_pengarang"
                                    id="id_pengarang" @error('id_pengarang') is-invalid @enderror>
                                    <option value="">--Pilih Pengarang--</option>
                                    @foreach ($datas2 as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_pengarang }}</option>
                                    @endforeach
                                </select>
                                @error('id_pengarang')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <label for="pengarang">Pilih Penerbit :</label> <br>
                            <div class="form-group">
                                <select class="form-control select2" style="width:100%;" name="id_penerbit"
                                    id="id_penerbit" @error('id_penerbit') is-invalid @enderror>
                                    <option value="">--Pilih Penerbit--</option>
                                    @foreach ($datas1 as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_penerbit }}</option>
                                    @endforeach
                                </select>
                                @error('id_penerbit')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <label for="kategori">Pilih Kategori :</label> <br>
                            <div class="form-group">
                                <select class="form-control select2" style="width:100%;" name="id_kategori"
                                    id="id_kategori" @error('id_kategori') is-invalid @enderror>
                                    <option value="">--Pilih Kategori--</option>
                                    @foreach ($datas3 as $data)
                                        <option value="{{ $data->id }}">{{ $data->kategori }}</option>
                                    @endforeach
                                </select>
                                @error('id_kategori')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <label for="isbn">ISBN</label> <br>
                            <div class="form-group">
                                <input type="text" id="ISBN" name="ISBN" class="form-control"
                                    placeholder="ISBN" @error('ISBN') is-invalid @enderror>
                                @error('ISBN')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <label for="tahun_Terbit">Tahun Terbit</label> <br>
                            <div class="form-group">
                                <input type="year" id="tahun_terbit" name="tahun_terbit" class="form-control"
                                    placeholder="Tahun Terbit" @error('tahun_terbit') is-invalid @enderror>
                                @error('tahun_terbit')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <label for="bahasa">Bahasa</label> <br>
                            <div class="form-group">
                                <input type="text" id="bahasa" name="bahasa" class="form-control"
                                    placeholder="Bahasa" @error('bahasa') is-invalid @enderror>
                                @error('bahasa')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <label for="stok">Stok Buku</label> <br>
                            <div class="form-group">
                                <input type="number" id="stok" name="stok" class="form-control"
                                    placeholder="Stok Buku" @error('stok') is-invalid @enderror>
                                @error('stok')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <label for="foto">Gambar Buku :</label> <br>
                            <div class="form-group">
                                <input type="file" id="foto" name="foto" @error('foto') is-invalid @enderror>
                            </div>
                            @error('foto')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

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
