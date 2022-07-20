<?php

namespace App\Http\Controllers;

use App\Models\Pengarang;
use Illuminate\Http\Request;

class PengarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Pengarang $pengarang)
    {
        $pengarang = Pengarang::all();
        return view ('pengarang.index',compact('pengarang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengarang.create');
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
            'nama_pengarang' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required'

        ],
        [
            'nama_pengarang.required' => 'Wajib di isi !',
            'alamat.required' => 'Wajib di isi !',
            'no_hp.required' => 'Wajib di isi !'
        ]);

         Pengarang::create([
            'nama_pengarang' => $request->nama_pengarang,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp
        ]);

        // dd($request->all());

        return redirect('pengarang')->with('success', 'Data Berhasil Ditambahkan!');

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
        $peng = Pengarang::findorfail($id);

        return view('pengarang.edit', compact('peng'));
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
        $peng = Pengarang::findorfail($id);
        $peng->update($request->all());

        return redirect('pengarang')->with('toast_success', 'Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peng = Pengarang::findorfail($id);
        $peng->delete();

        return back()->with('info', 'Data Berhasil di Hapus');
    }
}
