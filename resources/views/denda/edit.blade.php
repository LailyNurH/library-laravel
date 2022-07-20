
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
    <h1>   Edit Denda </h1>
    <div class="content-header"> </div>


    <!-- Main content -->
    <div class="content">
<div class= "card card-info-outline" >


      <div class="card-body">
        <form action="{{ route('update-denda', $dend->id )}}" method="post" >
            @csrf
            <div class="form-group">
                <input type="text" id="nama_denda" name="nama_denda" class="form-control" placeholder="Nama Denda" value="{{ $dend->nama }}">
            </div>
            <div class="form-group">
                <input type="number" id="jumlah_denda" name="jumlah_denda" class="form-control" placeholder="Jumlah Denda" value="{{ $dend->jumlah_denda }}">
            </div>
            <div class="form-group">
                <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="Keterangan" value="{{ $dend->keterangan }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Update Data </button>
            </div>
        </form>

    </div>




</div>

<!-- REQUIRED SCRIPTS -->
@include('layouts.script')
</body>
</html>
