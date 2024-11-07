@extends('layouts.main')
@section('title', 'Data Master Pegawai')

@section('content')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Pegawai</h4>
                    <a href="{{ route('pegawai.create') }}">
                        <button class="btn btn-primary btn-sm">Tambah <i class="mdi mdi-plus-circle-outline"></i></button>
                    </a>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered" id="dataTables">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Tanggal Lahir</th>
                                    {{-- <th>Jenis Kelamin</th> --}}
                                    {{-- <th>Alamat</th> --}}
                                    <th>Jabatan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=1 @endphp
                                @foreach ($pegawais as $pgw)
                                    <tr>
                                        <td class="text-center">{{ $i++ }}</td>
                                        <td>{{ $pgw->nik }}</td>
                                        <td>{{ $pgw->nama_pegawai }}</td>
                                        <td>{{ \Carbon\Carbon::parse($pgw->tanggal_lahir_pegawai)->locale('id')->translatedFormat('j F Y') }}</td>
                                        {{-- <td>{{ $pgw->jenis_kelamin }}</td> --}}
                                        {{-- <td>{{ $pgw->alamat_pegawai }}</td> --}}
                                        <td>{{ $pgw->jabatan->nama_jabatan}}</td>

                                        <td>
                                            <a href="{{ route('pegawai.show', $pgw->id) }}"
                                                class="btn btn-info btn-sm">Detail <i class="mdi mdi-information-variant"></i></a>
                                            <a href="{{ route('pegawai.edit', $pgw->id) }}"
                                                class="btn btn-warning btn-sm">Edit <i class="mdi mdi-lead-pencil"></i></a>
                                            <form action="{{ route('pegawai.destroy', $pgw->id) }}" method="POST"
                                                style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm">Hapus <i
                                                        class="mdi mdi-delete"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
