@extends('layouts.v_main')
@section('title', 'Form Edit Data Kantor Cabang')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Data Form</h3>
        </div>
        <form action="" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="editNamaCabang">Nama Kantor Cabang</label>
                    <input type="text" class="form-control" id="editNamaCabang" name="nama_cbng"
                        value="{{ $data->nama_cbng }}">
                </div>
                <div class="form-group">
                    <label for="inputAlamat">Alamat</label>
                    <input type="text" class="form-control" id="editAlamat" name="alamat" value="{{ $data->alamat }}">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success swalDefaultSuccess">Submit Update</button>
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
