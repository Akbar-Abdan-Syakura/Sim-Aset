@extends('layouts.v_main')
@section('title', 'Daftar Kantor Cabang PT. Dapensi Trio Usaha')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="#" type="button" class="btn btn-success btn-md float-left">
                <i class="fas fa-plus nav-icon"></i>
                &nbsp;&nbsp;
                Add Data
            </a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama Cabang</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tb_cabangs as $cabang)
                        <tr>
                            <td>{{ $cabang['id'] }}</td>
                            <td>{{ $cabang['nama_cbng'] }}</td>
                            <td>{{ $cabang['alamat'] }}</td>
                            <td class="text-md-center">
                                <a href="" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                &nbsp;&nbsp;
                                <a href="" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>
@endsection
