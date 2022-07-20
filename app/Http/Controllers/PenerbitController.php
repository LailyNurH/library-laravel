<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $penerbit = Penerbit::paginate(10);
        return view('penerbit.index', compact('penerbit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penerbit.create');
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
            'nama_penerbit' => 'required',
            'alamat' => 'required',
            'telp_hp' => 'required',
            'email' => 'required'

        ],
        [
            'nama_penerbit.required' => 'Wajib di isi !',
            'alamat.required' => 'Wajib di isi !',
            'telp_hp.required' => 'Wajib di isi !',
            'email.required' => 'Wajib di isi !'
        ]);

        Penerbit::create([
            'nama_penerbit' => $request->nama_penerbit,
            'alamat' => $request->alamat,
            'telp_hp' => $request->telp_hp,
            'email' => $request->email
        ]);

        // dd($request->all());

        return redirect('penerbit')->with('success', 'Data Berhasil Ditambahkan!');
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
        $pen = Penerbit::findorfail($id);
        return view('penerbit.edit', compact('pen'));
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
        $pen = Penerbit::findorfail($id);
        $pen->update($request->all());

        return redirect('penerbit')->with('toast_success', 'Data Berhasil di Simpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pen = Penerbit::findorfail($id);
        $pen->delete();

        return back()->with('info', 'Data Berhasil di Hapus!');
    }
}
