@extends('layouts.main')
@section('title', 'Data Master Jabatan')

@section('content')
    <div class="content-wrapper">

        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('admin.master.jabatan.index') }}">
                        <button class="btn btn-primary btn-sm"><i class="mdi mdi-keyboard-return"></i> Back </button>
                    </a>
                    <br>
                    <br>
                    <h4 class="card-title">Edit Data</h4>
                    <form action="{{ route('jabatan.update', $jabatan->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama_jabatan">nama_jabatan</label>
                            <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan"
                                placeholder="Masukkan Jabatan, Contoh: S1"
                                value="{{ old('nama_jabatan', $jabatan->nama_jabatan) }}">
                        </div>
                        <button type="submit" class="btn btn-success btn-sm"><i
                                class="mdi mdi-content-save"></i>Submit</button>
                        <button type="reset" class="btn btn-light btn-sm"><i class="mdi mdi-undo"></i>Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection