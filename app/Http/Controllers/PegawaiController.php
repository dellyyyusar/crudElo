<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;

class PegawaiController extends Controller
{

    public function index()
    {
        $pegawai = Pegawai::all();

        return view('index', ['pegawai' => $pegawai]);
    }

    public function tambah()
    {
        return view('pegawaiTambah');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        Pegawai::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);

        return redirect('/');
    }

    public function edit($id)
    {
        $pegawai = Pegawai::find($id);
        return view('pegawaiEdit', ['pegawai' => $pegawai]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        $pegawai = Pegawai::find($id);
        $pegawai->nama = $request->nama;
        $pegawai->alamat = $request->alamat;
        $pegawai->save();
        return redirect('/');
    }

    public function hapus($id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        return redirect('/');
    }
}
