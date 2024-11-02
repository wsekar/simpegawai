@extends('layouts.main')
@section('title', 'Data Master Pegawai')

@section('content')
    <div class="content-wrapper">
        <h4>Data Pegawai</h4>
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('admin.master.pegawai.index') }}">
                        <button class="btn btn-primary btn-sm"><i class="mdi mdi-keyboard-return"></i> Back </button>
                    </a>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td style="color:  var(--bs-primary); width:15%;"><strong>Nama</strong></td>
                                    <td style="width:35%;">{{ $pegawais->nama_pegawai }}</td>
                                    <td style="color:  var(--bs-primary); width:15%;"><strong>Tanggal Lahir</strong></td>
                                    <td style="width:35%;">
                                        {{ \Carbon\Carbon::parse($pegawais->tanggal_lahir_pegawai)->locale('id')->translatedFormat('j F Y') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color:  var(--bs-primary); width:15%;"><strong>NIP</strong></td>
                                    <td style="width:35%;">{{ $pegawais->nip }}</td>
                                    <td style="color:  var(--bs-primary); width:15%;"><strong>Alamat</strong></td>
                                    <td style="width:35%;">{{ $pegawais->alamat_pegawai }}</td>
                                </tr>
                                <tr>
                                    <td style="color:  var(--bs-primary); width:15%;"><strong>Jenis Kelamin</strong></td>
                                    <td style="width:35%;">{{ $pegawais->jenis_kelamin }}</td>
                                    <td style="color:  var(--bs-primary); width:15%;"><strong>Pendidikan Terakhir</strong>
                                    </td>
                                    <td style="width:35%;">
                                        @isset($pegawais->pendidikan->pendidikan)
                                            {{ $pegawais->pendidikan->pendidikan }}
                                        @else
                                        @endisset
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color:  var(--bs-primary); width:15%;"><strong>Jabatan</strong></td>
                                    <td style="width:35%;">{{ $pegawais->jabatan->nama_jabatan }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

<style>
    :root {
        --bs-primary: #4B49AC;
    }
</style>
