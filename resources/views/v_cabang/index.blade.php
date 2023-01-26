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
                                <a href="{{ url('/cabang/edit_cabang/' . $row->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                    {{ __('Edit Data') }}
                                </a>
                                <br>
                                <br>
                                <!-- Button trigger modal delete -->
                                <a class="btn btn-danger" data-toggle="modal" data-target="#ModalDelete{{ $row->id }}">
                                    <i class="fas fa-trash"></i>
                                    &nbsp;
                                    {{ __('Delete') }}
                                </a>
                                <!-- Modal Delete -->
                                <form action="{{ url('/cabang/' . $row->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal fade" id="ModalDelete{{ $row->id }}" tabindex="-1"
                                        role="dialog"aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">{{ __('Kantor Cabang Delete') }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Anda Yakin Ingin Menghapus Data <b>{{ $row->nama_cbng }}</b>?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">{{ __('Cancel') }}</button>
                                                    <button type="submit"
                                                        class="btn btn-danger">{{ __('Delete Data') }}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>
@endsection
