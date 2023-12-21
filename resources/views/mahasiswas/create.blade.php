@extends('layouts.app')
  
@section('title', 'Create Mahasiswa')
  
@section('contents')
    <h1 class="mb-0">Add Mata Kuliah</h1>
    <hr />
    <form action="{{ route('mahasiswas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
            <div class="col">
                <input type="text" name="nim" class="form-control" placeholder="NIM">
            </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="mk" class="form-control" placeholder="MK">
            </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="dosen" class="form-control" placeholder="Dosen">
            </div>
        </div>
    </div>
</div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection