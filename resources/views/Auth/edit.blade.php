
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
    <h1>   Edit Pengguna</h1>
    <div class="content-header"> </div>


    <!-- Main content -->
    <div class="content">
<div class= "card card-info-outline" >


      <div class="card-body">
        <form action="{{ route('update-user', $dtuser->id )}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="text" id="name" name="name" class="form-control" placeholder="Nama Pengguna" value="{{ $dtuser->name }}">
            </div>
            <div class="form-group">
                <input type="number" id="nip" name="nip" class="form-control" placeholder="NIP" value="{{ $dtuser ->nip }}">
            </div>
            <div class="form-group">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{ $dtuser ->email }}">
            </div>
            {{-- <div class="form-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
            </div> --}}
            <div class="form-group">
                <input type="text" id="no_hp" name="no_hp" class="form-control" placeholder="No HP" value="{{ $dtuser->no_hp }}">
            </div>
            <div class="form-group">
                <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat" value="{{ $dtuser->alamat }}">
            </div>
            <label for="foto">Foto Profil :</label> <br>
            <div class="form-group">
                <img src="{{ asset('img/'. $dtuser->foto ) }}" height="20%" width="20%" alt="" srcset="">

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
