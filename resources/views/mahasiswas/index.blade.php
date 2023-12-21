@extends('layouts.app')
  
@section('title', 'Data Mata Kuliah')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ route('mahasiswas.create') }}" class="btn btn-primary">Add Mata Kuliah</a>
    </div>
    <hr />
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
@endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>MK</th>
                <th>Dosen</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($mahasiswa->count() > 0)
                @foreach($mahasiswa as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nama }}</td>
                        <td class="align-middle">{{ $rs->nim }}</td>
                        <td class="align-middle">{{ $rs->mk }}</td>
                        <td class="align-middle">{{ $rs->dosen }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route ('mahasiswas.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route ('mahasiswas.edit', $rs->id) }}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('mahasiswas.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Mahasiswa not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection