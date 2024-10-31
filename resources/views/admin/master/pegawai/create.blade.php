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
                    <h4 class="card-title">Tambah Data</h4>
                    <form action="{{ route('pegawai.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control" id="nip" name="nip"
                                placeholder="Masukkan NIP">
                        </div>
                        <div class="form-group">
                            <label for="nama_pegawai">Nama</label>
                            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai"
                                placeholder="Masukkan Nama">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir_pegawai">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir_pegawai"
                                name="tanggal_lahir_pegawai">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat_pegawai">Alamat</label>
                            <input type="text" class="form-control" id="alamat_pegawai" name="alamat_pegawai"
                                placeholder="Masukkan Alamat">
                        </div>
                        <div class="form-group">
                            <label for="jabatan_id">Pendidikan Terakhir</label>
                            {{-- <input type="text" class="form-control" id="pendidikan_id" name="pendidikan_id" placeholder="Masukkan NIP"> --}}
                            <select name="pendidikan_id" id="pendidikan_id" class="form-select"
                                id="exampleFormControlSelect2">
                                <option value="">Pilih Tahun</option>
                                @foreach ($pendidikans as $pend)
                                    <option value="{{ $pend->id }}" data-tahun="{{ $pend->pendidikan }}">
                                        {{ $pend->pendidikan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jabatan_id">Jabatan</label>
                            <select name="jabatan_id" id="jabatan_id" class="form-select"
                                id="exampleFormControlSelect2">
                                <option value="">Pilih Jabatan</option>
                                @foreach ($jabatans as $jbt)
                                    <option value="{{ $jbt->id }}" data-tahun="{{ $jbt->nama_jabatan }}">
                                        {{ $jbt->nama_jabatan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success btn-sm"><i class="mdi mdi-content-save"></i>Submit</button>
                        <button type="reset" class="btn btn-light btn-sm"><i class="mdi mdi-undo"></i>Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
