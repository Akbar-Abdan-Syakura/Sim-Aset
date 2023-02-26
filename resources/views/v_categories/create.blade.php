@extends('layouts.v_main')
@section('title', 'Form Tambah Data Category')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Isi Form</h3>
    </div>
    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="nama">Nama Category Asset</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Name Of The Branch Office">
            </div>
            <div class="form-group">
                <label for="nama">Kriteria</label>
                <select class="form-control" aria-label="Default select example" name="kriteria_id">
                    <option selected>Pilih Kriteria</option>
                    @foreach ($kriterias as $item)
                    <option value="{{ $item->id }}">{{ ucfirst($item->golongan->nama) }} | {{ ucfirst($item->nama) }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nama">Umur Ekonomis</label>
                <select class="form-control" aria-label="Default select example" name="umur_ekonomis_id">
                    <option selected>Pilih Umur Ekonomis</option>
                    @foreach ($umur_aset as $item)
                    <option value="{{ $item->id }}">{{ $item->kelompok }} | {{ $item->umur_ekonomis }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="spek">Spek</label>
                <textarea type="text" class="form-control" id="spek" rows="3" name="spek" placeholder="Enter Addresses"></textarea>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success swalDefaultSuccess">Submit</button>
            <a href="{{ route('category.index') }}" type="button" class="btn btn-outline-danger float-right">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                </svg>
                Back
            </a>
            <button type="reset" class="btn btn-danger float-right mr-2">Reset</button>
        </div>
    </form>
</div>
@endsection
