@extends('layouts.v_main')
@section('title', 'Daftar Pengajuan Aset')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="/pengajuan/add_pengajuan" type="button" class="btn btn-success btn-md float-left">
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
                        <th>Kode Pengajuan</th>
                        <th>User Yang Mengajukan</th>
                        <th>Nama Aset</th>
                        <th>Jumlah Aset Yang Diajukan</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i = 1)
                    @foreach ($data as $row)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $row->kd_pengajuan }}</td>
                            <td>{{ $row->user->name }}</td>
                            <td>{{ $row->nama_aset }}</td>
                            <td>{{ $row->qty }}</td>
                            <td>{{ $row->create_at }}</td>
                            <td>{{ $row->status }}</td>
                            <td class="text-md-center">
                                <a href="{{ url('/pengajuan/edit_pengajuan/', $row->id) }}" class="btn btn-warning btn-sm">
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
