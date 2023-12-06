<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    function profil(){
        return view('profil');
}
    public function SimpanData(Request $request)
    {
        $request->validate([
            'nik_meninggal' => 'required',
            'nama_meninggal' => 'required',
            'tgl_meninggal' => 'required',
            'alamat' => 'required',
            'nik_ahwa' => 'required',
            'nama_ahwa' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
        ]);

        DB::table('data_profil')->insert([
            'nik_meninggal' => $request->nik_meninggal,
            'nama_meninggal' => $request->nama_meninggal,
            'tgl_meninggal' => $request->tgl_meninggal,
            'alamat' => $request->alamat,
            'nik_ahwa' => $request->nik_ahwa,
            'nama_ahwa' => $request->nama_ahwa,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
        ]);
        return redirect()->route('profil')->with('success','Data berhasil disimpan');
    }

}
