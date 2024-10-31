<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendidikanModel;

class PendidikanController extends Controller
{
    public function index()
    {
        $pendidikan = PendidikanModel::get();

        return view('admin.master.pendidikan.index', compact('pendidikan'));
    }
    public function create()
    {
        return view('admin.master.pendidikan.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'pendidikan' => 'required|string|max:255',
        ]);

        PendidikanModel::create($request->all());

        return redirect()->route('admin.master.pendidikan.index')->with('success', 'Data Pendidikan created successfully');
    }

    public function edit($id)
    {
        $pendidikan = PendidikanModel::findOrFail($id);

        return view('admin.master.pendidikan.edit', compact('pendidikan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pendidikan' => 'required|string|max:255',
        ]);

        $pendidikan = PendidikanModel::findOrFail($id);
        $pendidikan->update($request->all());

        return redirect()->route('admin.master.pendidikan.index')->with('success', 'Data Pendidikan updated successfully');
    }

    public function destroy($id)
    {
        $pendidikan = PendidikanModel::findOrFail($id);
        $pendidikan->delete();

        return redirect()->route('admin.master.pendidikan.index')->with('success', 'Data Pendidikan deleted successfully');
    }
}
