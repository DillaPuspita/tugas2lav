@extends('layouts.app')
  
@section('title', 'Edit Mahasiswa')
  
@section('contents')
    <h1 class="mb-0">Edit Mahasiswa</h1>
    <hr />
    <form action="{{ route ('mahasiswas.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="nama" value="{{ $mahasiswa->nama}}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nim</label>
                <input type="text" name="nim" class="form-control" placeholder="Nim" value="{{ $mahasiswa->nim }}" >
            </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">MK</label>
                <input type="text" name="mk" class="form-control" placeholder="MK" value="{{ $mahasiswa->mk }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Dosen</label>
                <input type="text" name="dosen" class="form-control" placeholder="Dosen" value="{{ $mahasiswa->dosen }}">
            </div>
        </div>
    </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection