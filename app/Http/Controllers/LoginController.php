<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoginController extends Controller
{

    public function index()
    {
        $dtuser = User::all();
        return view('Auth.index', compact('dtuser'));
    }

    public function create_user()
    {
        return view('Auth.create');
    }

    public function store_user(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'nip' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'password' => 'required',
            'email' => 'required'

        ],
        [
            'name.required' => 'Wajib di isi !',
            'nip.required' => 'Wajib di isi !',
            'alamat.required' => 'Wajib di isi !',
            'no_hp.required' => 'Wajib di isi !',
            'password.required' => 'Wajib di isi !',
            'email.required' => 'Wajib di isi !'
        ]);

        $nm = $request->foto;
        $namaFile = time().rand(100,999).".".$nm->getClientOriginalExtension();

        $dtuser= new User;
        $dtuser->name = $request->name;
        $dtuser->nip = $request->nip;
        $dtuser->email = $request->email;
        $dtuser->alamat = $request->alamat;
        $dtuser->no_hp = $request->no_hp;
        $dtuser->password = bcrypt($request->password);
        $dtuser->remember_token = Str::random(60);


        $dtuser->foto = $namaFile;
        $nm->move(public_path().'/img', $namaFile);

        $dtuser->save();


        return redirect('data-pengguna')->with('toast_success', 'Data Berhasil di Simpan');
    }




    public function edit_user($id)
    {
        $dtuser = User::findorfail($id);

        return view('Auth.edit', compact('dtuser') );
    }

    public function update_user(Request $request , $id)
    {
        $ubah = User::findorfail($id);
        // $angg->update($request->all());



        $oldImg = $ubah->foto;

           $dtuser= [
            'name'=>$request['name'],
            'nip'=>$request['nip'],
            'email'=>$request['email'],
            'alamat'=>$request['alamat'],
            'no_hp'=>$request['no_hp'],
            'foto'=>$oldImg,
        ];


        $request->foto->move(public_path().'/img' , $oldImg);
        $ubah->update($dtuser);

        return redirect('data-pengguna')->with('toast_success', 'Data Berhasil di Ubah');

    }

    public function destroy_user($id)
    {
        $dtuser = User::findorfail($id);
        $dtuser->delete();

        return back()->with('info', 'Data Berhasil di Hapus');
    }

    public function login()
    {
        // dd($request->all());

        // if(Auth::attempt($request->only('nip','password'))){
        //     return redirect('dashboard');
        // }
        return view('Auth.login');
    }


    public function postlogin(Request $request)
    {
        // dd($request->all());

        if (Auth::attempt($request->only('nip', 'password'))) {
            return redirect('dashboard');

        }
        return redirect('login')->with('toast_success', 'Data Berhasil di Ubah');

    }

    public function postlogout()
    {
        Auth::logout();

        return redirect('login');
    }
}
