<?php

namespace App\Http\Controllers;
use App\Models\Status;

use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = Status::all();
        return view ('status.index',compact('status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('status.create');
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
            'nama_status' => 'required',
            'batas_buku' => 'required',
            'batas_hari' => 'required'

        ],
        [
            'nama_status.required' => 'Wajib di isi !',
            'batas_buku.required' => 'Wajib di isi !',
            'batas_hari.required' => 'Wajib di isi !'
        ]);


        Status::create([
            'nama_status' => $request->nama_status,
            'batas_buku' => $request->batas_buku,
            'batas_hari' => $request->batas_hari
        ]);

        // dd($request->all());

        return redirect('status')->with('success', 'Data Berhasil Ditambahkan!');
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
        $stat = Status::findorfail($id);

        return view('status.edit', compact('stat'));
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
        $stat = Status::findorfail($id);
        $stat->update($request->all());

        return redirect('status')->with('toast_success', 'Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stat = Status::findorfail($id);
        $stat->delete();

        return back()->with('info', 'Data Berhasil di Hapus');
    }
}
