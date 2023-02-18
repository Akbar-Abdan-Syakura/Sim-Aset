@extends('layouts.v_main')
@section('title', 'Form Tambah Data Aset')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Isi Form</h3>
    </div>
    <form action="{{ route('store.aset') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="category_id">Pilih Nama Category</label>
                <select class="form-control" id="category_id" name="category_id">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="Pilih Tanggal Perolehan">Tanggal Perolehan</label>
                <input type="date" class="form-control" id="inputTanggalPerolehan" rows="3" name="tgl_perolehan" placeholder="Enter Date In"></input>
            </div>
            <div class="form-group">
                <label for="nama_cabang">Pilih Nama Cabang</label>
                <select class="form-control" id="nama_cabang" name="cabang_id">
                    @foreach ($branchs as $branch)
                    <option value="{{ $branch->id }}">{{ $branch->nama_cbng }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="placements">Pilih Lokasi Penempatan</label>
                <select class="form-control" id="placements" name="penempatan_id">
                    @foreach ($placements as $place)
                    <option value="{{ $place->id }}">{{ $place->penempatan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="conditions">Pilih Kondisi Asset</label>
                <select class="form-control" id="conditions" name="kondisi_id">
                    @foreach ($conditions as $condition)
                    <option value="{{ $condition->id }}">{{ $condition->kondisi }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="InputHargaAset">Harga Aset</label>
                <input type="number" class="form-control" id="InputHargaAset" rows="3" name="harga" placeholder="Enter The Price Of Assets"></input>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success swalDefaultSuccess">Submit</button>
            <a href="{{ route('aset') }}" type="button" class="btn btn-outline-danger float-right">
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