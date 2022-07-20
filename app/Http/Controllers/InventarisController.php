<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Inventaris;
use Illuminate\Http\Request;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $datas = Inventaris::with ('book')->latest()->paginate(12);
        $dtbuku = Buku::all();
       return view('inventaris.index',compact('datas','dtbuku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dtbuku = Buku::all();
        return view('inventaris.create', compact('dtbuku'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'id_buku' => 'required',
            'tgl_masuk' => 'required',
            'status_buku' => 'required'

        ],
        [
            'id_buku.required' => 'Wajib di isi !',
            'tgl_masuk.required' => 'Wajib di isi !',
            'status_buku.required' => 'Wajib di isi !'
        ]);

        Inventaris::create([
            'id_buku' => $request->id_buku,
            'tgl_masuk'=>$request->tgl_masuk,
            'status_buku'=>$request->status_buku,
        ]);

        // dd($request->all());

         return redirect('inventaris')->with('success', 'Data Berhasil Ditambahkan!');

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
        $inven = Inventaris::findorfail($id);
        $dtbuku = Buku::all();
        // return view('kategori.edit', compact('kat'));
        return view ('inventaris.edit',compact('inven','dtbuku'));
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
        $inven = Inventaris::findorfail($id);
        $inven->update($request->all());
        return redirect('inventaris')->with('toast_success', 'Data Berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inven = Inventaris::findorfail($id);
        $inven->delete();

        return back()->with('info', 'Data Berhasil di Hapus!');
    }
}
