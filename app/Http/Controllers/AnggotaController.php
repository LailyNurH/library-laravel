<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



      $datas = Anggota::with ('status')->latest()->paginate(12);

        return view('anggota.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sta = Status::all();

        return view('anggota.create',compact('sta'));
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
            'no_anggota' => 'required',
            'nama_anggota' => 'required',
            'jeniskelamin' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'status_id' => 'required',
            'photo' => 'required'

        ],
        [
            'no_anggota.required' => 'Wajib di isi !',
            'nama_anggota.required' => 'Wajib di isi !',
            'jeniskelamin.required' => 'Wajib di isi !',
            'alamat.required' => 'Wajib di isi !',
            'no_hp.required' => 'Wajib di isi !',
            'status_id.required' => 'Wajib di isi !',
            'photo.required' => 'Wajib di isi !'
        ]);


  $nm = $request->photo;
            $namaFile = rand(11111, 99999) . '.' . $nm->getClientOriginalExtension();




        $dtanggota= new Anggota;
        $dtanggota->no_anggota = $request->no_anggota;
        $dtanggota->nama_anggota = $request->nama_anggota;
        $dtanggota->jeniskelamin = $request->jeniskelamin;
        $dtanggota->alamat = $request->alamat;
        $dtanggota->no_hp = $request->no_hp;
        $dtanggota->status_id = $request->status_id;

        $dtanggota->photo = $namaFile;
        $nm->move(public_path().'/img', $namaFile);

        $dtanggota->save();


        return redirect('anggota')->with('toast_success', 'Data Berhasil di Simpan');
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
        $sta = Status::all();
        $angg = Anggota::with('status')->findorfail($id);

        return view('anggota.edit', compact('angg','sta'));
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
        $ubah = Anggota::findorfail($id);
        // $angg->update($request->all());

        $oldImg = $ubah->photo;

           $angg= [
            'no_anggota'=>$request['no_anggota'],
            'nama_anggota'=>$request['nama_anggota'],
            'jeniskelamin'=>$request['jeniskelamin'],
            'no_hp'=>$request['no_hp'],
            'photo'=>$oldImg,
            'status_id'=>$request['status_id'],
        ];


        $request->photo->move(public_path().'/img' , $oldImg);
        $ubah->update($angg);

        return redirect('anggota')->with('toast_success', 'Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $angg = Anggota::findorfail($id);
        $angg->delete();

        return back()->with('info', 'Data Berhasil di Hapus');
    }
}
