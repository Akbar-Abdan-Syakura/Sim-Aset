@extends('layouts.v_main')
@section('title', 'Data User Yang Terdaftar')

@section('content')
    <div class="card">
        <div class="card-header">
            @can('isAdmin')
                <a href="/user/add_user" type="button" class="btn btn-success btn-md float-left">
                    <i class="fas fa-plus nav-icon"></i>
                    &nbsp;&nbsp;
                    Add Data
                </a>
            @endcan
        </div>
        <div class="card-body">
            <table id="myTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama User</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th class="text-md-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $row)
                        <tr>
                            <td>{{ $data->firstItem() + $key }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->role->fullname ?? '-' }}</td>
                            <td class="text-md-center">
                                <a href="/user/edit_user/{{ $row->id }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                    Edit Data
                                </a>
                            </td>
                        </tr>
                    @endforeach
            </table>
            {{ $data->links() }}
        </div>
    </div>

@endsection
