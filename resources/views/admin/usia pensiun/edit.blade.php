@extends('layouts.main')
@section('title', 'Data Tahun Pensiun')

@section('content')
    <div class="content-wrapper">

        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('admin.usia pensiun.index') }}">
                        <button class="btn btn-primary btn-sm"><i class="mdi mdi-keyboard-return"></i> Back </button>
                    </a>
                    <br>
                    <br>
                    <h4 class="card-title">Edit Data</h4>
                    <form action="{{ route('usia pensiun.update', $usias->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="usia">Usia</label>
                            <input type="text" class="form-control" id="usia" name="usia"
                                placeholder="Masukkan Usia"
                                value="{{ old('usia', $usias->usia) }}">
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
