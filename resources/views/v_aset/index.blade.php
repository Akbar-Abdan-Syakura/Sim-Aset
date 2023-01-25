@extends('layouts.v_main')
@section('title', 'Daftar Barang Inventaris Aset Tetap PT. Dapensi Trio Usaha')

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
                        <th>Kode Aset</th>
                        <th>Nama Aset</th>
                        <th>Tanggal Perolehan</th>
                        <th>Lokasi</th>
                        <th>Penempatan</th>
                        <th>Spesifikasi</th>
                        <th>QTY</th>
                        <th>Umur Ekonomis Aset</th>
                        <th>Usia Aset</th>
                        <th>Kondisi</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tb_asets as $aset)
                        <tr>
                            <td>{{ $aset['id'] }}</td>
                            <td>{{ $aset['kd_aset'] }}</td>
                            <td>{{ $aset['nama'] }}</td>
                            <td>{{ $aset['tgl_perolehan'] }}</td>
                            <td>{{ $aset->cabang->nama_cbng }}</td>
                            <td>{{ $aset->penempatan->penempatan }}</td>
                            <td>{{ $aset['spek'] }}</td>
                            <td>{{ $aset['qty'] }}</td>
                            <td>{{ $aset->umur->umur_ekonomis }}</td>
                            <td>{{ $aset['usia_aset'] }} Tahun</td>
                            <td>{{ $aset->kondisi->kondisi }}</td>
                            <td>{{ $aset['harga'] }}</td>
                            <td class="text-sm-center">
                                <a href="" class="btn btn-block btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn btn-block btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>
@endsection
