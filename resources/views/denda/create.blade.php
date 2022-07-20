
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
    <h1>   Tambah Denda </h1>
    <div class="content-header"> </div>


    <!-- Main content -->
    <div class="content">
<div class= "card card-info-outline" >


      <div class="card-body">
        <form action="{{ route('save-denda' )}}" method="post" >
            @csrf
            <div class="form-group">
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Denda" @error('nama') is-invalid @enderror>
                @error('nama')
                <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
            <div class="form-group">
                <input type="number" id="jumlah_denda" name="jumlah_denda" class="form-control" placeholder="Jumlah Denda" @error('jumlah_denda') is-invalid @enderror>
                @error('jumlah_denda')
                <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
            <div class="form-group">
                <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="Keterangan" @error('keterangan') is-invalid @enderror>
                @error('keterangan')
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
