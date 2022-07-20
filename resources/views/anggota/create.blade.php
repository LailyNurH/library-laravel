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
                        <form action="{{ route('save-anggota') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" id="nama_anggota" name="nama_anggota" class="form-control"
                                    placeholder="Nama Anggota" @error('nama_anggota') is-invalid @enderror>

                                @error('nama_anggota')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="number" id="no_anggota" name="no_anggota" class="form-control"
                                    placeholder="No Identitas Anggota (NIS)" @error('no_anggota') is-invalid @enderror>
                                @error('no_anggota')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <label for="jeniskelamin">Jenis Kelamin :</label> <br>
                            <div class="form-check form-check-inline">

                                <label for="jeniskelamin">
                                    <input type="radio" name="jeniskelamin" value="L" id="jenis_kelamin"
                                        selected>Laki-Laki
                                    <input type="radio" name="jeniskelamin" value="P"
                                        id="jenis_kelamin">Perempuan

                                </label>
                                @error('jeniskelamin')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- <div class="form-group">
                <input type="text" id="jeniskelamin" name="jeniskelamin" class="form-control" placeholder="Keterangan">
            </div> --}}
                            <div class="form-group">
                                <input type="text" id="alamat" name="alamat" class="form-control"
                                    placeholder="Alamat" @error('alamat') is-invalid @enderror>
                                @error('alamat')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="number" id="no_hp" name="no_hp" class="form-control"
                                    placeholder="Nomor Telefon" @error('no_hp') is-invalid @enderror>
                                @error('no_hp')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <select class="form-control select2" style="width:100%;" name="status_id" id="status_id"
                                    @error('status_id') is-invalid @enderror>
                                    <option value="">--Pilih Status--</option>
                                    @foreach ($sta as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_status }}</option>
                                    @endforeach
                                </select> <br>
                                @error('status_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">

                                <input type="file" id="photo" name="photo"
                                    @error('photo') is-invalid @enderror>


                            </div>
                            @error('photo')
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
