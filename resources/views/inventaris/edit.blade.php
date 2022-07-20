
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
    <h1>   Edit Inventaris </h1>
    <div class="content-header"> </div>


    <!-- Main content -->
    <div class="content">
<div class= "card card-info-outline" >


      <div class="card-body">
        <form action="{{ route('update-inventaris' ,$inven->id )}}" method="post" enctype="multipart/form-data">
            @csrf

            <label for="kategori">Pilih Buku :</label> <br>
            <div class="form-group">
                <select class="form-control select2" style="width:100%;" name="id_buku"
                    <option value="" class="text-gray-400" selected>-- pilih Buku --</option>
                    @foreach ($dtbuku as $buku)
                    <option value="{{ $buku->id }}" {{ $inven->id_buku == $buku->id ? 'selected' : '' }}>{{ $buku->judul_buku }}</option>
                    @endforeach
                </select>
            </div>
            <label for="stok">Tangal Masuk</label> <br>
            <div class="form-group">
                <input type="date" id="tgl_masuk" name="tgl_masuk" class="form-control" placeholder="Tanggal Masuk" value="{{ $inven->tgl_masuk }}">
            </div>
            <label for="stok">Status Buku</label> <br>
            <div class="form-group">
                <input type="text" id="status_buku" name="status_buku" class="form-control" placeholder="Status Buku" value="{{ $inven->status_buku }}">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Ubah Data </button>
            </div>
        </form>

    </div>




</div>

<!-- REQUIRED SCRIPTS -->
@include('layouts.script')
</body>
</html>
