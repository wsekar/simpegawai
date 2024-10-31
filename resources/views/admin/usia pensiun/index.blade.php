@extends('layouts.main')
@section('title', 'Data Usia Pensiun')

@section('content')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">          
                <div class="card-body">
                    <h4 class="card-title">Data Usia Pensiun</h4>
                    <a href="{{ route('usia pensiun.create') }}">
                        <button class="btn btn-primary btn-sm">Tambah <i class="mdi mdi-plus-circle-outline"></i></button>
                    </a>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered" id="dataTables">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Usia</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=1 @endphp
                                @foreach ($usias as $us)
                                    <tr>
                                        <td class="text-center">{{ $i++ }}</td>
                                        <td>{{ $us->usia }}</td>

                                        <td>
                                            <a href="{{ route('usia pensiun.edit', $us->id) }}"
                                                class="btn btn-warning btn-sm">Edit <i class="mdi mdi-lead-pencil"></i></a>
                                            <form action="{{ route('usia pensiun.destroy', $us->id) }}" method="POST"
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
