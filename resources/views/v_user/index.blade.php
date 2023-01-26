@extends('layouts.v_main')
@section('title', 'Data User Yang Terdaftar')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="/user/add_user" type="button" class="btn btn-success btn-md float-left">
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
                        <th>Nama User</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i = 1)
                    @foreach ($data as $row)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->password }}</td>
                            <td class="text-md-center">
                                <a href="/user/edit_user" class="btn btn-warning btn-sm">
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
