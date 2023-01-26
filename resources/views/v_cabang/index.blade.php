@extends('layouts.v_main')
@section('title', 'Daftar Kantor Cabang PT. Dapensi Trio Usaha')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="/cabang/add_cabang" type="button" class="btn btn-success btn-md float-left">
                <i class="fas fa-plus nav-icon"></i>
                &nbsp;&nbsp;
                Add Data
            </a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Cabang</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i = 1)
                    @foreach ($data as $row)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $row->nama_cbng }}</td>
                            <td>{{ $row->alamat }}</td>
                            <td class="text-md-center">
                                <a href="{{ url('/cabang/edit_cabang/', $row->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                    Edit Data
                                </a>
                                &nbsp;&nbsp;
                                <a class="btn btn-danger btn-sm" id="delete">
                                    <i class="fas fa-trash-alt"></i>
                                    Hapus Data
                                </a>
                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>
@endsection
