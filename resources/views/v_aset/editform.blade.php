@extends('layouts.v_main')
@section('title', 'Form Tambah Data Aset')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Isi Form</h3>
    </div>
    <form action="{{ route('update.aset', $asset->id) }}" method="POST">
        @csrf
        @method("PATCH")
        <div class="card-body">
            <div class="form-group">
                <label for="inputNamaAset">Nama Aset Baru</label>
                <input type="text" class="form-control" id="inputNamaAset" name="nama" placeholder="Enter Asset Name" value="{{ $asset->nama }}">
            </div>
            <div class="form-group">
                <label for="Pilih Tanggal Perolehan">Tanggal Perolehan</label>
                <input type="date" class="form-control" id="inputTanggalPerolehan" rows="3" name="tgl_perolehan" placeholder="Enter Date In" value="{{ $asset->tgl_perolehan }}"></input>
            </div>
            <div class="form-group">
                <label for="nama_cabang">Pilih Nama Cabang</label>
                <select class="form-control" id="nama_cabang" name="cabang_id">
                    @foreach ($branchs as $branch)
                    <option value="{{ $branch->id }}" @if ($branch->id == $asset->cabang_id)
                        selected
                        @endif>{{ $branch->nama_cbng }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="placements">Pilih Lokasi Penempatan</label>
                <select class="form-control" id="placements" name="penempatan_id">
                    @foreach ($placements as $place)
                    <option value="{{ $place->id }}" @if ($place->id == $asset->penempatan_id)
                        selected @endif>{{ $place->penempatan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="ecomic_ages">Pilih Kelompok Umur Ekonomis</label>
                <select class="form-control" id="ecomic_ages" name="umur_ekonomis_id">
                    @foreach ($economicAges as $age)
                    <option value="{{ $age->id }}" @if ($age->id == $asset->umur_ekonomis_id)
                        selected @endif>{{ $age->kelompok }} | {{ $age->umur_ekonomis }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="conditions">Pilih Kondisi Asset</label>
                <select class="form-control" id="conditions" name="kondisi_id">
                    @foreach ($conditions as $condition)
                    <option value="{{ $condition->id }}" @if ($condition->id == $asset->kondisi_id)
                        selected @endif>{{ $condition->kondisi }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="Input Spesifikasi">Spesifikasi</label>
                <textarea type="text" class="form-control" id="inputSpesifikasi" rows="3" name="spek" placeholder="Enter Specification">
                {{ $asset->spek }}
                </textarea>
            </div>
            <div class="form-group">
                <label for="InputJumlahAset">Jumlah Aset</label>
                <input type="number" class="form-control" id="InputJumlahAset" rows="3" name="qty" placeholder="Enter Quantity Of Assets" value="{{ $asset->qty }}"></input>
            </div>
            <div class="form-group">
                <label for="InputHargaAset">Harga Aset</label>
                <input type="number" class="form-control" id="InputHargaAset" rows="3" name="harga" placeholder="Enter The Price Of Assets" value="{{ $asset->harga }}"></input>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success swalDefaultSuccess">Save Changes</button>
            <a href="/cabang" type="button" class="btn btn-outline-danger float-right">
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
