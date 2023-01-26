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
                    <label for="inputKodeAset">Kode Aset</label>
                    <input type="text" class="form-control" id="inputKodeAset" name="kd_aset"
                        placeholder="Enter Asset Label">
                </div>
                <div class="form-group">
                    <label for="inputNamaAset">Nama Aset Baru</label>
                    <input type="text" class="form-control" id="inputNamaAset" name="nama"
                        placeholder="Enter Asset Name">
                </div>
                <div class="form-group">
                    <label for="Pilih Tanggal Perolehan">Tanggal Perolehan</label>
                    <input type="text" class="form-control" id="inputTanggalPerolehan" rows="3"
                        name="tgl_perolehan" placeholder="Enter Date In"></input>
                </div>
                <div class="form-group">
                    <label for="Input Spesifikasi">Spesifikasi</label>
                    <textarea type="text" class="form-control" id="inputSpesifikasi" rows="3" name="spek"
                        placeholder="Enter Specification"></textarea>
                </div>
                <div class="form-group">
                    <label for="InputJumlahAset">Jumlah Aset</label>
                    <input type="text" class="form-control" id="InputJumlahAset" rows="3" name="qty"
                        placeholder="Enter Quantity Of Assets"></input>
                </div>
                <div class="form-group">
                    <label for="InputUsiaAset">Masukkan Usia Aset</label>
                    <input type="text" class="form-control" id="InputUsiaAset" rows="3" name="usia_aset"
                        placeholder="Enter Age"></input>
                </div>
                <div class="form-group">
                    <label for="InputHargaAset">Harga Aset</label>
                    <input type="text" class="form-control" id="InputHargaAset" rows="3" name="harga"
                        placeholder="Enter The Price Of Assets"></input>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success swalDefaultSuccess">Submit</button>
                <a href="/cabang" type="button" class="btn btn-outline-danger float-right">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg>
                    Back
                </a>
                <button type="reset" class="btn btn-danger float-right mr-2">Reset</button>
            </div>
        </form>
    </div>
@endsection
