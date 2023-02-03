@extends('layouts.v_main')
@section('title', 'Data User Yang Terdaftar')

@section('content')
<div class="card">
    <div class="card-header">
        @can("isAdmin")
        <a href="/user/add_user" type="button" class="btn btn-success btn-md float-left">
            <i class="fas fa-plus nav-icon"></i>
            &nbsp;&nbsp;
            Add Data
        </a>
        @endcan
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
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
                @php($i = 1)
                @foreach ($data as $row)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->role->name ?? "-" }}</td>
                    <td class="text-md-center">
                        <a href="/user/edit_user/{{ $row->id }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i>
                            Edit Data
                        </a>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
</div>

@endsection
