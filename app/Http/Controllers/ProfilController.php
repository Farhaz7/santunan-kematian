<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    function profil($id){
        $user = User::find($id);
        return view('profil',compact('user'));
}
    public function SimpanData(Request $request,$id)
    {
        $data = User::findOrFail($id);

        // $request->validate([
        //     'nik_meninggal' => 'required',
        //     'nama_meninggal' => 'required',
        //     'tgl_meninggal' => 'required',
        //     'alamat_meningggal' => 'required',
        //     'nik_ahwa' => 'required',
        //     'nama_ahwa' => 'required',
        //     'kecamatan' => 'required',
        //     'kelurahan' => 'required',
        //     'kedudukan' => 'required',
        // ]);

        $data->update([
                'tgl_meninggal' => $request->tgl_meninggal,
                'alamat_meninggal' => $request->alamat_meninggal,
                'kecamatan_meninggal' => $request->kecamatan_meninggal,
                'kelurahan_meninggal' => $request->kelurahan_meninggal,
                'notelp_ahwa' => $request->notelp_ahwa,
                'alamat_ahwa' => $request->alamat_ahwa,
                'nik_ahwa' => $request->nik_ahwa,
                'nama_ahwa' => $request->nama_ahwa,
                'kecamatan_ahwa' => $request->kecamatan_ahwa,
                'kelurahan_ahwa' => $request->kelurahan_ahwa,
                'kedudukan' => $request->kedudukan
        ]);

        return redirect('home')->with('success','Data berhasil disimpan');

        // DB::table('data_profil')->insert([
        //     'nik_meninggal' => $request->nik_meninggal,
        //     'nama_meninggal' => $request->nama_meninggal,
        //     'tgl_meninggal' => $request->tgl_meninggal,
        //     'alamat' => $request->alamat,
        //     'nik_ahwa' => $request->nik_ahwa,
        //     'nama_ahwa' => $request->nama_ahwa,
        //     'kecamatan' => $request->kecamatan,
        //     'kelurahan' => $request->kelurahan,  
        // ]);
    }

}
