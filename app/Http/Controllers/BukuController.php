<?php

namespace App\Http\Controllers;

use App\Exports\BukuExport;
use App\Models\Buku;

use App\Models\Kategori;
use App\Models\Penerbit;
use App\Models\Pengarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Facades\Excel as FacadesExcel;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Buku $buku)
    {
        // $data = DB::table('barang')
        // ->join('detail_barang', 'detail_barang.id_barang', '=', 'barang.id_barang')
        // ->get();
        $datas2 = Pengarang::all();
        $datas1 = Penerbit::all();
        $datas3 = Kategori::all();
        $datas = Buku::with('relation_pengarang')->get();
        return view('buku.index', compact('datas', 'datas2', 'datas1', 'datas3'));

        // dd($datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas2 = Pengarang::all();
        $datas1 = Penerbit::all();
        $datas3 = Kategori::all();
        return view('buku.create', compact('datas2', 'datas1', 'datas3'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'judul_buku' => 'required',
                'id_pengarang' => 'required',
                'id_penerbit' => 'required',
                'id_kategori' => 'required',
                'ISBN' => 'required',
                'tahun_terbit' => 'required',
                'bahasa' => 'required',
                'foto' => 'required',
                'stok' => 'required'

            ],
            [
                'judul_buku.required' => 'Wajib di isi !',
                'id_pengarang.required' => 'Wajib di isi !',
                'id_penerbit.required' => 'Wajib di isi !',
                'id_kategori.required' => 'Wajib di isi !',
                'ISBN.required' => 'Wajib di isi !',
                'tahun_terbit.required' => 'Wajib di isi !',
                'bahasa.required' => 'Wajib di isi !',
                'foto.required' => 'Wajib di isi !',
                'stok.required' => 'Wajib di isi !'
            ]
        );


        $nmfoto = $request->foto;
        $namaFile = time() . rand(100, 999) . "." . $nmfoto->getClientOriginalExtension();

        $dtBuku = new Buku();
        $dtBuku->judul_buku = $request->judul_buku;
        $dtBuku->id_pengarang = $request->id_pengarang;
        $dtBuku->id_penerbit = $request->id_penerbit;
        $dtBuku->id_kategori = $request->id_kategori;
        $dtBuku->ISBN = $request->ISBN;
        $dtBuku->tahun_terbit = $request->tahun_terbit;
        $dtBuku->bahasa = $request->bahasa;
        $dtBuku->stok = $request->stok;

        $dtBuku->foto = $namaFile;
        $nmfoto->move(public_path() . '/img', $namaFile);

        $dtBuku->save();


        return redirect('buku')->with('toast_success', 'Data Berhasil di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $datas2 = Pengarang::all();
        $datas1 = Penerbit::all();
        $datas3 = Kategori::all();
        $buku = Buku::findorfail($id);

        return view('buku.edit', compact('buku', 'datas2', 'datas1', 'datas3'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ubah = Buku::findorfail($id);
        // $angg->update($request->all());

        $oldImg = $ubah->foto;
        $buku = [
            'judul_buku' => $request['judul_buku'],
            'id_pengarang' => $request['id_pengarang'],
            'id_penerbit' => $request['id_penerbit'],
            'id_kategori' => $request['id_kategori'],
            'ISBN' => $request['ISBN'],
            'tahun_terbit' => $request['tahun_terbit'],
            'bahasa' => $request['bahasa'],
            'stok' => $request['stok'],
            'foto' => $oldImg,
        ];


        $request->foto->move(public_path() . '/img', $oldImg);
        $ubah->update($buku);

        return redirect('buku')->with('toast_success', 'Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::findorfail($id);
        $buku->delete();

        return back()->with('info', 'Data Berhasil di Hapus');
    }

    public function exportexcel()
    {
        return Excel::download(new BukuExport, 'data-buku.xlsx');
    }

    public static function export()
    {
        return FacadesExcel::download(new BukuExport, 'z.xlsx');
    }
}
