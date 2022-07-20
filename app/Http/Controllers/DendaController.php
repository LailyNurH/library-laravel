<?php

namespace App\Http\Controllers;

use App\Models\Denda;
use Illuminate\Http\Request;

class DendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $denda = Denda::all();
        return view('denda.index', compact('denda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('denda.create');
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
            'nama' => 'required',
            'jumlah_denda' => 'required',
            'keterangan' => 'required'

        ],
        [
            'nama.required' => 'Wajib di isi !',
            'jumlah_denda.required' => 'Wajib di isi !',
            'keterangan.required' => 'Wajib di isi !'
        ]);

        Denda::create([
            'nama' => $request->nama,
            'jumlah_denda' => $request->jumlah_denda,
            'keterangan' => $request->keterangan
        ]);

        // dd($request->all());

         return redirect('denda')->with('success', 'Data Berhasil Ditambahkan!');
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
        $dend = Denda::findorfail($id);

        return view('denda.edit', compact('dend'));
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
        $dend = Denda::findorfail($id);
        $dend->update($request->all());

        return redirect('denda')->with('toast_success', 'Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dend = Denda::findorfail($id);
        $dend->delete();

        return back()->with('info', 'Data Berhasil di Hapus');
    }
}
