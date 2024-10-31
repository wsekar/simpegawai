@extends('layouts.main')
@section('title', 'Data Master Jabatan')

@section('content')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">          
                <div class="card-body">
                    <h4 class="card-title">Data Jabatan</h4>
                    <a href="{{ route('jabatan.create') }}">
                        <button class="btn btn-primary btn-sm">Tambah <i class="mdi mdi-plus-circle-outline"></i></button>
                    </a>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered" id="dataTables">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Jabatan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=1 @endphp
                                @foreach ($jabatan as $jbt)
                                    <tr>
                                        <td class="text-center">{{ $i++ }}</td>
                                        <td>{{ $jbt->nama_jabatan }}</td>

                                        <td>
                                            <a href="{{ route('jabatan.edit', $jbt->id) }}"
                                                class="btn btn-warning btn-sm">Edit <i class="mdi mdi-lead-pencil"></i></a>
                                            <form action="{{ route('jabatan.destroy', $jbt->id) }}" method="POST"
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
