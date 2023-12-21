@extends('layouts.app')
  
@section('title', 'Show Mahasiswa')
  
@section('contents')
    <h1 class="mb-0">Detail Mahasiswa</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $mahasiswa->nama }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nim</label>
            <input type="text" name="nim" class="form-control" placeholder="Nim" value="{{ $mahasiswa->nim }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">MK</label>
            <input type="text" name="mk" class="form-control" placeholder="MK" value="{{ $mahasiswa->mk }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Dosen</label>
            <textarea class="form-control" name="dosen" placeholder="Dosen" readonly>{{ $mahasiswa->dosen }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $mahasiswa->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $mahasiswa->updated_at }}" readonly>
        </div>
    </div>
@endsection