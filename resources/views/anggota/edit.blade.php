
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
    <h1>   Edit Anggota </h1>
    <div class="content-header"> </div>


    <!-- Main content -->
    <div class="content">
<div class= "card card-info-outline" >


      <div class="card-body">
        <form action="{{ route('update-anggota' ,$angg->id )}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="text" id="nama_anggota" name="nama_anggota" class="form-control" placeholder="Nama Anggota" value="{{ $angg->nama_anggota }}">
            </div>
            <div class="form-group">
                <input type="number" id="no_anggota" name="no_anggota" class="form-control" placeholder="No Identitas Anggota (NIS)" value="{{ $angg->no_anggota }}">
            </div>
            <label for="jeniskelamin">Jenis Kelamin :</label> <br>
            <div class="form-check form-check-inline">
                <label for="jeniskelamin">
                    <input type="radio" name="jeniskelamin" value="L" {{ $angg->jeniskelamin == 'L' ? 'checked' : ''}} id="jenis_kelamin" selected>Laki-Laki
                    <input type="radio" name="jeniskelamin" value="P" {{ $angg->jeniskelamin == 'P' ? 'checked' : ''}} id="jenis_kelamin">Perempuan
                </label>
                </div>
            {{-- <div class="form-group">
                <input type="text" id="jeniskelamin" name="jeniskelamin" class="form-control" placeholder="Keterangan">
            </div> --}}
            <div class="form-group">
                <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat" value="{{ $angg->alamat }}">
            </div>

            <div class="form-group">
                <input type="number" id="alamat" name="no_hp" class="form-control" placeholder="Nomor Telefon" value="{{ $angg->no_hp }}">
            </div>

            <div class="form-group">
                <select class="form-control select2" style="width:100%;" name="status_id" id="status_id">
                <option disabled value> Pilih Status </option>
                <option value="{{ $angg->status_id}}"> {{ $angg->status->nama_status }} </option>
                @foreach ($sta as $data)
                <option value="{{ $data->id }}">{{ $data->nama_status }}</option>

                @endforeach
                </select>
            </div>

            <div class="form-group">
                <img src="{{ asset('img/'. $angg->photo ) }}" height="20%" width="20%" alt="" srcset="">

            </div>
            <div class="form-group">
                <input type="file" id="photo" name="photo">
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
