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
    <h1>   Edit Kategori </h1>
    <div class="content-header"> </div>


    <!-- Main content -->
    <div class="content">
<div class= "card card-info-outline" >


      <div class="card-body">
        <form action="{{ url('update-kategori',$kat->id )}}" method="post" >
            @csrf
            <div class="form-group">
                <input type="text" id="kategori" name="kategori" class="form-control" placeholder="Kategori" value="{{ $kat->kategori }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Ubah Data</button>
            </div>
        </form>

    </div>




</div>

<!-- REQUIRED SCRIPTS -->
@include('layouts.script')
</body>
</html>
