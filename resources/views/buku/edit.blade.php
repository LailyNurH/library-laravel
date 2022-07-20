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
                        <form action="{{ route('update-buku', $buku->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label for="kategori">Judul Buku:</label> <br>
                            <div class="form-group">
                                <input type="text" id="judul_buku" name="judul_buku" class="form-control"
                                    placeholder="Judul Buku" value="{{ $buku->judul_buku }}">
                            </div>
                            <label for="pengarang">Pengarang :</label> <br>
                            <div class="form-group">
                                <select class="form-control select2" style="width:100%;" name="id_pengarang"
                                    <option value="" class="text-gray-400" selected>-- pilih Pengarang --</option>
                                    @foreach ($datas2 as $pengarang)
                                    <option value="{{ $pengarang->id }}" {{ $buku->id_pengarang == $pengarang->id ? 'selected' : '' }}>{{ $pengarang->nama_pengarang }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label for="penerbit">Penerbit :</label> <br>
                            <div class="form-group">
                                <select class="form-control select2" style="width:100%;" name="id_penerbit"
                                    <option value="" class="text-gray-400" selected>-- pilih Penerbit --</option>
                                    @foreach ($datas1 as $penerbit)
                                    <option value="{{ $penerbit->id }}" {{ $buku->id_penerbit == $penerbit->id ? 'selected' : '' }}>{{ $penerbit->nama_penerbit }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label for="kategori">Pilih Kategori :</label> <br>
                            <div class="form-group">
                                <select class="form-control select2" style="width:100%;" name="id_kategori"
                                    <option value="" class="text-gray-400" selected>-- pilih Kategori --</option>
                                    @foreach ($datas3 as $kategori)
                                    <option value="{{ $kategori->id }}" {{ $buku->id_kategori == $kategori->id ? 'selected' : '' }}>{{ $kategori->kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label for="isbn">ISBN</label> <br>
                            <div class="form-group">
                                <input type="text" id="ISBN" name="ISBN" class="form-control"
                                    placeholder="ISBN" value="{{ $buku->ISBN }}">
                            </div>
                            <label for="tahun_terbit">Tahun Terbit :</label> <br>
                            <div class="form-group">
                                <input type="number" id="tahun_terbit" name="tahun_terbit" class="form-control"
                                    placeholder="Tahun Terbit" value="{{ $buku->tahun_terbit }}">
                            </div>
                            <label for="Bahasa">Bahasa :</label> <br>
                            <div class="form-group">
                                <input type="text" id="bahasa" name="bahasa" class="form-control"
                                    placeholder="Bahasa" value="{{ $buku->bahasa }}">
                            </div>
                            <label for="stok">Stok Buku :</label> <br>
                            <div class="form-group">
                                <input type="number" id="stok" name="stok" class="form-control"
                                    placeholder="Stok Buku" value="{{ $buku->stok }}">
                            </div>
                            <label for="foto">Gambar Buku :</label> <br>
                            <div class="form-group">
                                <img src="{{ asset('img/'. $buku->foto ) }}" height="20%" width="20%" alt="" srcset="">

                            </div>
                            <div class="form-group">
                                <input type="file" id="foto" name="foto">
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
