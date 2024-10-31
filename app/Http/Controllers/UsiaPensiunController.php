<?php

namespace App\Http\Controllers;

use App\Models\UsiaPensiunModel;
use Illuminate\Http\Request;

class UsiaPensiunController extends Controller
{
    public function index()
    {
        $usias = UsiaPensiunModel::get();

        return view('admin.usia pensiun.index', compact('usias'));
    }
    public function create()
    {
        return view('admin.usia pensiun.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'usia' => 'required',
        ]);

        UsiaPensiunModel::create($request->all());

        return redirect()->route('admin.usia pensiun.index')->with('success', 'Data Usia Pensiun created successfully');
    }

    public function edit($id)
    {
        $usias = UsiaPensiunModel::findOrFail($id);

        return view('admin.usia pensiun.edit', compact('usias'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'usia' => 'required',
        ]);

        $usias = UsiaPensiunModel::findOrFail($id);
        $usias->update($request->all());

        return redirect()->route('admin.usia pensiun.index')->with('success', 'Data Usia Pensiun updated successfully');
    }

    public function destroy($id)
    {
        $usias = UsiaPensiunModel::findOrFail($id);
        $usias->delete();

        return redirect()->route('admin.usia pensiun.index')->with('success', 'Data Usia Pensiun deleted successfully');
    }
}
