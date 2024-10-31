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
                    <h4 class="card-title">Tambah Data</h4>
                    <form action="{{ route('jabatan.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama_jabatan">Jabatan</label>
                            <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan"
                                placeholder="Masukkan Jabatan">
                        </div>
                        <button type="submit" class="btn btn-success btn-sm"><i class="mdi mdi-content-save"></i>Submit</button>
                        <button type="reset" class="btn btn-light btn-sm"><i class="mdi mdi-undo"></i>Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
