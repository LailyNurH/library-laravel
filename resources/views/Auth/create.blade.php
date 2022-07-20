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
            <h1> Tambah Pengguna</h1>
            <div class="content-header"> </div>


            <!-- Main content -->
            <div class="content">
                <div class="card card-info-outline">


                    <div class="card-body">
                        <form action="{{ route('save-user') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" id="name" name="name" class="form-control"
                                    placeholder="Nama Pengguna" @error('name') is-invalid @enderror>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="number" id="nip" name="nip" class="form-control"
                                    placeholder="NIP" @error('nip') is-invalid @enderror>
                                @error('nip')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" name="email" class="form-control"
                                    placeholder="Email" @error('email') is-invalid @enderror>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" id="password" name="password" class="form-control"
                                    placeholder="Password" @error('password') is-invalid @enderror>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" id="no_hp" name="no_hp" class="form-control"
                                    placeholder="No HP" @error('no_hp') is-invalid @enderror>
                                @error('no_hp')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" id="alamat" name="alamat" class="form-control"
                                    placeholder="Alamat" @error('alamat') is-invalid @enderror>
                                @error('alamat')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <label for="foto">Foto Profil :</label> <br>
                            <div class="form-group">
                                <input type="file" id="foto" name="foto" @error('foto') is-invalid @enderror>
                                @error('foto')
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
