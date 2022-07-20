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
    <h1>   Tambah Pengarang </h1>
    <div class="content-header"> </div>


    <!-- Main content -->
    <div class="content">
<div class= "card card-info-outline" >

      <div class="card-body">
        <form action="{{ route('update-pengarang',$peng->id)}}" method="post" >
            @csrf
            <div class="form-group">
                <input type="text" id="nama_pengarang" name="nama_pengarang" class="form-control" placeholder="Nama Pengarang" value="{{ $peng->nama_pengarang }}">
            </div>
            <div class="form-group">
                <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat Pengarang" value="{{ $peng->alamat }}">
            </div>
            <div class="form-group">
                <input type="number" id="no_hp" name="no_hp" class="form-control" placeholder="No.Telf" value="{{ $peng->no_hp }}">
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
