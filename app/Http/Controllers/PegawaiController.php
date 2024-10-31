<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PegawaiModel;
use App\Models\PendidikanModel;
use App\Models\JabatanModel;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawais = PegawaiModel::with('pendidikan', 'jabatan')->get();

        return view('admin.master.pegawai.index', compact('pegawais'));
    }
    public function create()
    {

        $pendidikans = PendidikanModel::all();
        $jabatans = JabatanModel::all();

        return view('admin.master.pegawai.create', compact('pendidikans', 'jabatans'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'nama_pegawai' => 'required',
            'tanggal_lahir_pegawai' => 'required',
            'alamat_pegawai' => 'required',
            'jenis_kelamin' => 'nullable',
            'pendidikan_id' => 'nullable',
            'jabatan_id' => 'nullable',
        ]);

        PegawaiModel::create($request->all());
        return redirect()->route('admin.master.pegawai.index')->with('success', 'Data Pegawai created successfully');
    }

    public function edit($id)
    {
        $pegawais = PegawaiModel::findOrFail($id);
        $pendidikans = PendidikanModel::all();
        $jabatans = JabatanModel::all();

        return view('admin.master.pegawai.edit', compact('pendidikans', 'pegawais', 'jabatans'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nip' => 'required',
            'nama_pegawai' => 'required',
            'tanggal_lahir_pegawai' => 'required',
            'alamat_pegawai' => 'required',
            'jenis_kelamin' => 'nullable',
            'pendidikan_id' => 'nullable',
            'jabatan_id' => 'nullable',
        ]);

        $pegawais = PegawaiModel::findOrFail($id);
        $pegawais->update($request->all());

        return redirect()->route('admin.master.pegawai.index')->with('success', 'Data Pegawai updated successfully');
    }

    public function destroy($id)
    {
        $pegawais = PegawaiModel::findOrFail($id);
        $pegawais->delete();

        return redirect()->route('admin.master.pegawai.index')->with('success', 'Data Pegawai deleted successfully');
    }

    public function show($id)
    {
        $pegawais = PegawaiModel::with('pendidikan')->findOrFail($id);
        $pendidikans = PendidikanModel::all();
        $jabatans = JabatanModel::all();

        return view('admin.master.pegawai.show', compact('pendidikans', 'pegawais', 'jabatans'));
    }
}
