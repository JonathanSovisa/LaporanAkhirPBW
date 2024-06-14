@extends('layouts.main')
@section('title', 'Master Data')
@section('artikel')

<div class="card">
    <div class="card-header">
        <a href="/masterdata/add-form" class="btn btn-primary"> <i class="bi bi-plus-square"></i> Master Data </a>
    </div>

    <div class="card-body">
        @if(session('alert'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ session('alert') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        {{-- Table Here --}}
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Penjual</th>
                    <th>Umur Penjual</th>
                    <th>Alamat Penjual</th>
                    <th>Foto Penjual</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($md as $idx => $m)
                    <tr>
                        <td>{{ $idx + 1 }}</td>
                        <td>{{ $m->namapenjual }}</td>
                        <td>{{ $m->umurpenjual }}</td>
                        <td>{{ $m->alamatpenjual }}</td>
                        <td><img src="{{ asset('storage/'.$m->fotopenjual) }}" alt="{{ $m->fotopenjual }}" height="80" width="80"></td>
                        <td><a href="/masterdata/edit-form/{{ $m->id }}" class="btn btn-success"><i class="bi bi-pencil-square"> </i> </a>
                            <a href="/delete/{{ $m->id }}" class="btn btn-danger"> <i class="bi bi-trash3"></i> </a> </td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
