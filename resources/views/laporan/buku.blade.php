<table>
    <thead>
        <tr>
            <th> Foto </th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Kategori</th>
            <th>ISBN</th>
            <th>Tahun Terbit</th>
            <th>Bahasa</th>
            <th>Stok</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($buku as $data)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <th> <img src="{{ asset('img/' . $data->foto) }}"> </th>
                <th> {{ $data->ISBN }} </th>
                {{-- <th> {{ $data->tahun_terbit }} </th>
                <th> {{ $data->bahasa }} </th>
                <th> {{ $data->stok }} </th> --}}
            </tr>
        @endforeach
    </tbody>
</table>
