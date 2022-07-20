<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Kategori $kategori)
    {
        $datas = Kategori::paginate(10);

        return view ('kategori.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('kategori.create');
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
            'kategori' => 'required',

        ],
        [
            'kategori.required' => '   Kategori Wajib di isi !'
        ]);

        Kategori::create([
            'kategori' => $request->kategori,
        ]);

        // dd($request->all());

         return redirect('kategori')->with('success', 'Data Berhasil Ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kat = Kategori::findorfail($id);

        // return view('kategori.edit', compact('kat'));
        return view ('kategori.edit',compact('kat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $kat = Kategori::findorfail($id);
        $kat->update($request->all());
        return redirect('kategori')->with('toast_success', 'Data Berhasil di Update!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kat = Kategori::findorfail($id);
        $kat->delete();

        return back()->with('info', 'Data Berhasil di Hapus!');
    }
}
