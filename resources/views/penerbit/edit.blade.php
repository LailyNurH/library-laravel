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
    <h1>   Edit Penerbit </h1>
    <div class="content-header"> </div>


    <!-- Main content -->
    <div class="content">
<div class= "card card-info-outline" >

      <div class="card-body">
        <form action="{{ url('update-penerbit', $pen->id )}}" method="post" >
            @csrf
            <div class="form-group">
                <input type="text" id="nama_penerbit" name="nama_penerbit" class="form-control" placeholder="Nama Penerbit" value="{{ $pen->nama_penerbit }}">
            </div>
            <div class="form-group">
                <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat Penerbit" value="{{ $pen->alamat }}">
            </div>
            <div class="form-group">
                <input type="number" id="telp_hp" name="telp_hp" class="form-control" placeholder="No.Telf" value="{{ $pen->telp_hp }}">
            </div>
            <div class="form-group">
                <input type="text" id="email" name="email" class="form-control" placeholder="Email" value="{{  $pen->email }}">
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
