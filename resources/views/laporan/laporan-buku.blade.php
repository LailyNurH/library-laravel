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

    <div class="content-header"> </div>


    <!-- Main content -->
    <div class="content">
<div class= "card card-info-outline" >
    <div class="card-header">
        <h4>   Laporan Buku</h4>
        <div class="card-tools">
            <a href="{{ route('create-kategori') }}" class="btn btn-success">Tambah Data <i class="fas da-plus-square"></i></a>
</div>
      </div>
      <div class="card-body">


        @if ($request->request->count() !== 0)
        <div class="px-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden sm:rounded-lg">
                  <div class="p-6">
                  <div class="flex flex-col">
                      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="mb-3">
                            <a href="{{ route('laporan.buku.excel', ['tgl1' => $request->tgl1, 'tgl2' => $request->tgl2]) }}" class="inline-flex items-center px-4 py-2 bg-green-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"><i class="fas fa-file-excel mr-2"></i></i>Export Excel</a>
                            <a href="{{ route('laporan.reportbuku.pdf', ['tgl1' => $request->tgl1, 'tgl2' => $request->tgl2]) }}" class="inline-flex items-center px-4 py-2 bg-red-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"><i class="fas fa-file-pdf mr-2"></i></i>Export PDF</a>
                        </div>
                          <div class="shadow overflow-hidden sm:rounded-lg">
                          <table class="min-w-full divide-y divide-gray-200">
                              <thead class="bg-gray-50">
                              <tr>
                                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                      #
                                  </th>
                                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                      Nama
                                  </th>
                                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                      Pembeli
                                  </th>
                                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Tanggal Pembelian
                                  </th>
                                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                      Quantity
                                  </th>
                                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Harga Final
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Total Harga
                                </th>
                              </tr>
                              </thead>
                              <tbody class="bg-white divide-y divide-gray-200">
                              @foreach ($buku as $data)
                              <tr>
                                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                      {{ $loop->iteration }}
                                  </td>
                                  {{-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                      {{ Str::limit($data->nama, 10) }}
                                  </td> --}}
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                      {{-- {{ Str::limit($data->item->name, 10) }} --}}
                                  </td>
                                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $data->judul_buku }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $data->isbn }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $data->tahun_terbit }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">

                                    {{-- @foreach ($datas1 as $object)
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        @currency($object->final_price)
                                    </span> @endforeach --}}

                                    {{-- @foreach ($datas1 as $datar) --}}
                                    {{-- @if ($data->id == $data->final_price) --}}
                                   <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        @currency($data->isbn )
                                    </span>
                                    {{-- @endif --}}
                                      {{-- @endforeach --}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{-- @currency($data->harga * $data->quantity) --}}
                                    </td>







                              </tr>
                              @endforeach
                              <!-- More items... -->
                              </tbody>
                          </table>
                          </div>
                      </div>
                      </div>
                  </div>
                    </div>
                </div>
            </div>
          </div>
          @endif
    </div>
  <!-- /.content-wrapper -->

</div>

</div>

<div class="card-footer">

</div>
  </div>
</div>


<!-- REQUIRED SCRIPTS -->
@include('layouts.script')


@include('sweetalert::alert')
</body>
</html>
