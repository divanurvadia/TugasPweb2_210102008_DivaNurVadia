<?php

namespace App\Http\Controllers;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function kegiatan()
    {
        $data = Kegiatan::all();
        return view('kagiatan.daftar-kegiatan', compact('data'));
    }

    public function create()
    {
        return view('kagiatan.tambah-kegiatan');
    }

    public function insert(Request $request)
    {
        $data = Kegiatan::create([
            'nama_sekolah' => $request->nama_sekolah,
            'nama_kegiatan' => $request->nama_kegiatan,
            'tanggal' => $request->tanggal,
        ]);
        // dd($data);
        $data->save();
        return redirect('daftar-kegiatan')->with('success', 'Data berhasil ditambah');
    }

    public function edit($id)
    {
        $kegiatan = Kegiatan::find($id);
        return view('kagiatan.edit-kegiatan', compact('kegiatan'));
    }

    public function update(Request $request, $id)
    {
        $data = Kegiatan::findOrFail($id);
        $data->nama_sekolah = $request->nama_sekolah;
        $data->nama_kegiatan = $request->nama_kegiatan;
        $data->tanggal = $request->tanggal;
        $data->save();

        return redirect()->route('kegiatan')->with('success', 'Data Berhasil Diedit');
    }

    public function delete($id)
    {
        $data = Kegiatan::find($id);
        $data->delete();
        return redirect('daftar-kegiatan');
    }


}
