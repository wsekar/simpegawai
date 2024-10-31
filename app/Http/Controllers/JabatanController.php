<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JabatanModel;

class JabatanController extends Controller
{
    public function index()
    {
        $jabatan = JabatanModel::get();

        return view('admin.master.jabatan.index', compact('jabatan'));
    }
    public function create()
    {
        return view('admin.master.jabatan.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_jabatan' => 'required|string|max:255',
        ]);

        JabatanModel::create($request->all());

        return redirect()->route('admin.master.jabatan.index')->with('success', 'Data Jabatan created successfully');
    }

    public function edit($id)
    {
        $jabatan = JabatanModel::findOrFail($id);

        return view('admin.master.jabatan.edit', compact('jabatan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_jabatan' => 'required|string|max:255',
        ]);

        $jabatan = JabatanModel::findOrFail($id);
        $jabatan->update($request->all());

        return redirect()->route('admin.master.jabatan.index')->with('success', 'Data Jabatan updated successfully');
    }

    public function destroy($id)
    {
        $jabatan = JabatanModel::findOrFail($id);
        $jabatan->delete();

        return redirect()->route('admin.master.jabatan.index')->with('success', 'Data Jabatan deleted successfully');
    }
}
