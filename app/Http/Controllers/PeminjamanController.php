<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Denda;
use App\Models\Peminjaman;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
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
        $datas = Peminjaman::where('status', 'like', '%dipinjam%')->get();
        return view('peminjam.index', compact('datas', 'datas2', 'datas1', 'datas3'));
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
        return view('peminjam.create', compact('datas', 'datas2', 'datas1', 'datas3'));
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
                'tgl_pinjam' => 'required',
                'id_anggota' => 'required',
                'id_buku' => 'required',
                'id_pengguna' => 'required'

            ],
            [
                'tgl_pinjam.required' => 'Wajib di isi !',
                'id_anggota.required' => 'Wajib di isi !',
                'id_buku.required' => 'Wajib di isi !',
                'id_pengguna.required' => 'Wajib di isi !'
            ]
        );

        $fdate = $request->tgl_pinjam;
        $tdate = $request->tgl_kembali;
        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($tdate);
        $interval = $datetime1->diff($datetime2);
         //now do whatever you like with $days



        $dtpeminjam = new Peminjaman();
        $dtpeminjam->tgl_pinjam = $request->tgl_pinjam;
        $dtpeminjam->id_anggota = $request->id_anggota;
        $dtpeminjam->lama_terlambat = $interval->format('%a');

        $dtpeminjam->id_buku = $request->id_buku;
        $dtpeminjam->id_pengguna = $request->id_pengguna;

        $dtpeminjam->status = 'dipinjam';
        $dtpeminjam->save();


        return redirect('peminjam')->with('toast_success', 'Data Berhasil di Simpan');
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



        $peminjam = Peminjaman::findorfail($id);
        $peminjam->status = 'Dikembalikan';
        $datas2 = Anggota::all();
        $datas1 = User::all();
        $datas3 = Buku::all();
        $datas = Peminjaman::all();
        $denda = Denda::all();
        return view('peminjam.detail-peminjam', compact('denda', 'peminjam', 'datas', 'datas2', 'datas1', 'datas3'));
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
        $peminjam = Peminjaman::findorfail($id);
        $peminjam->status = 'Dikembalikan';
        $peminjam->update($request->all());


        return redirect('peminjam')->with('toast_success', 'Buku Telah Berhasil Dikembalikan');
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

    public function updateStatus($id)
    {

        // $dtpeminjam = Peminjaman::findorfail($id);
        // $dtpeminjam->status = 'Dikembalikan';
        // $dtpeminjam->save();

        // return back()->with('toast_success', 'Buku Telah di Kembalikan');
    }
}
