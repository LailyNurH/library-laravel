<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas2 = Anggota::all();
        $datas1 = User::all();
        $datas3 = Buku::all();
        $datas = Peminjaman::where('status', 'like', '%dikembalikan%')->get();
        return view('pengembalian.index' , compact('datas','datas2','datas1','datas3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas2 = Anggota::all();
        $datas1 = User::all();
        $datas3 = Buku::all();
        $datas = Peminjaman::all();
        return view('penembalian.create' , compact('datas','datas2','datas1','datas3'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $pengembalian = Peminjaman::findorfail($id);
        $dtbuku = Buku::all();
        // return view('kategori.edit', compact('kat'));
        return view ('inventaris.edit',compact('pengembalian','dtbuku'));
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
        $pengembalian = Peminjaman::findorfail($id);
        $pengembalian->update($request->all());
        return redirect('pengembalian')->with('toast_success', 'Data Berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
