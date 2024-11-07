<?php

namespace App\Http\Controllers;

use App\Models\PegawaiModel;
use Illuminate\Http\Request;
use App\Models\PelatihanModel;

class PelatihanController extends Controller
{
    public function index()
    {
        $pelatihans = PelatihanModel::with('pegawai')->get();

        return view('admin.master.pegawai.pelatihan.index', compact('pelatihans'));
    }
    public function create()
    {

        $pegawais = PegawaiModel::all();

        return view('admin.master.pegawai.pelatihan.create', compact('pegawais'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'nama_pegawai' => 'required',
            'tanggal_lahir_pegawai' => 'required',
            'alamat_pegawai' => 'required',
            'jenis_kelamin' => 'nullable',
            'pendidikan_id' => 'nullable',
            'jabatan_id' => 'nullable',
        ]);

        PelatihanModel::create($request->all());
        return redirect()->route('admin.master.pegawai.pelatihan.index')->with('success', 'Data Pelatihan created successfully');
    }

    public function edit($id)
    {
        $pelatihans = PelatihanModel::findOrFail($id);
        $pegawais = PegawaiModel::all();

        return view('admin.master.pegawai.pelatihan.edit', compact('pegawais', 'pelatihans'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nik' => 'required',
            'nama_pegawai' => 'required',
            'tanggal_lahir_pegawai' => 'required',
            'alamat_pegawai' => 'required',
            'jenis_kelamin' => 'nullable',
            'pendidikan_id' => 'nullable',
            'jabatan_id' => 'nullable',
        ]);

        $pelatihans = PelatihanModel::findOrFail($id);
        $pelatihans->update($request->all());

        return redirect()->route('admin.master.pegawai.pelatihan.index')->with('success', 'Data Pelatihan updated successfully');
    }

    public function destroy($id)
    {
        $pelatihans = PelatihanModel::findOrFail($id);
        $pelatihans->delete();

        return redirect()->route('admin.master.pegawai.pelatihan.index')->with('success', 'Data Pelatihan deleted successfully');
    }

    public function show($id)
    {
        $pelatihans = PelatihanModel::with('pendidikan', 'jabatan')->findOrFail($id);
        $pendidikan = PegawaiModel::all();

        return view('admin.master.pegawai.pelatihan.show', compact('pendidikan', 'pelatihans'));
    }
}
