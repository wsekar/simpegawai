@extends('layouts.main')
@section('title', 'Data Master Pegawai')

@section('content')
    <div class="content-wrapper">

        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('admin.master.pegawai.index') }}">
                        <button class="btn btn-primary btn-sm"><i class="mdi mdi-keyboard-return"></i> Back </button>
                    </a>
                    <br>
                    <br>
                    <h4 class="card-title">Edit Data</h4>
                    <form action="{{ route('pegawai.update', $pegawais->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control" id="nip" name="nip"
                                placeholder="Masukkan NIP" value="{{ old('nip', $pegawais->nip) }}">
                        </div>
                        <div class="form-group">
                            <label for="nama_pegawai">Nama</label>
                            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai"
                                placeholder="Masukkan Nama" value="{{ old('nama_pegawai', $pegawais->nama_pegawai) }}">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir_pegawai">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir_pegawai"
                                name="tanggal_lahir_pegawai"
                                value="{{ old('tanggal_lahir_pegawai', $pegawais->tanggal_lahir_pegawai) }}">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki" {{ $pegawais->jenis_kelamin == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                                <option value="Perempuan" {{ $pegawais->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat_pegawai">Alamat</label>
                            <input type="text" class="form-control" id="alamat_pegawai" name="alamat_pegawai"
                                placeholder="Masukkan Alamat" value="{{ old('nip', $pegawais->alamat_pegawai) }}">
                        </div>
                        <div class="form-group">
                            <label for="pendidikan_id">Pendidikan Terakhir</label>
                            <select name="pendidikan_id" id="pendidikan_id" class="form-select js-example-basic-single">
                                <option value="">Pilih Pendidikan Terakhir</option>
                                @foreach ($pendidikans as $pend)
                                    <option value="{{ $pend->id }}"
                                        {{ $pegawais->pendidikan_id == $pend->id ? 'selected' : '' }}>
                                        {{ $pend->pendidikan }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jabatan_id">Jabatan</label>
                            <select name="jabatan_id" id="jabatan_id" class="form-select js-example-basic-single">
                                <option value="">Pilih Jabatan</option>
                                @foreach ($jabatans as $jbt)
                                    <option value="{{ $jbt->id }}"
                                        {{ $pegawais->jabatan_id == $jbt->id ? 'selected' : '' }}>
                                        {{ $jbt->nama_jabatan }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <button type="reset" class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
