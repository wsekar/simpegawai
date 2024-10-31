@extends('layouts.main')
@section('title', 'Data Master Pendidikan')

@section('content')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">          
                <div class="card-body">
                    <h4 class="card-title">Data Pendidikan</h4>
                    <a href="{{ route('pendidikan.create') }}">
                        <button class="btn btn-primary btn-sm">Tambah <i class="mdi mdi-plus-circle-outline"></i></button>
                    </a>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered" id="dataTables">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Pendidikan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=1 @endphp
                                @foreach ($pendidikan as $pend)
                                    <tr>
                                        <td class="text-center">{{ $i++ }}</td>
                                        <td>{{ $pend->pendidikan }}</td>

                                        <td>
                                            <a href="{{ route('pendidikan.edit', $pend->id) }}"
                                                class="btn btn-warning btn-sm">Edit <i class="mdi mdi-lead-pencil"></i></a>
                                            <form action="{{ route('pendidikan.destroy', $pend->id) }}" method="POST"
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
