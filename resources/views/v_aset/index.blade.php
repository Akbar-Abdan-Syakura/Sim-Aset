@extends('layouts.v_main')
@section('title', 'Daftar Barang Inventaris Aset Tetap PT. Dapensi Trio Usaha')

@section('content')
<div class="card">
    <div class="card-header">
        @canany(['isManager', 'isAdmin'])
        <a href="/aset/add_aset" type="button" class="btn btn-success btn-md float-left">
            <i class="fas fa-plus nav-icon"></i>
            &nbsp;&nbsp;
            Add Data
        </a>
        @endcanany
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped mb-4">
            <thead>
                <tr>
                    <th>No.</th>
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
                    @canany(['isManager', 'isAdmin'])
                    <th>Action</th>
                    @endcanany
                </tr>
            </thead>
            <tbody>
                @foreach ($result as $key=> $row)
                <tr>
                    {{-- <td>{{ $result->firstItem() + $key }}</td> --}}
                    <td>{{ $row->kd_aset }}</td>
                    <td>{{ $row->kd_aset }}</td>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->tgl_perolehan }}</td>
                    <td>{{ $row->cabang->nama_cbng ??"-" }}</td>
                    <td>{{ $row->penempatan->penempatan??"-" }}</td>
                    <td>{{ $row->spek }}</td>
                    <td>{{ $row->qty }}</td>
                    <td>{{ $row->umur->umur_ekonomis ??"-" }}</td>
                    <td>{{ getUsiaAsset($row->tgl_perolehan) }} Tahun</td>
                    <td>{{ $row->kondisi->kondisi ??"-" }}</td>
                    <td class="text-nowrap">{{ intToRupiah($row->harga) }}</td>
                    @canany(['isManager', 'isAdmin'])
                    <td class="text-sm-center">
                        <a href="/aset/edit_aset/{{ $row->id }}" class="btn btn-sm btn-warning">
                            Edit Data
                            <i class="fas fa-edit"></i>
                        </a>
                        <br>
                        <br>
                        <a href="" class="btn btn-sm btn-danger" id="delete">
                            Hapus Data
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                    @endcanany
                </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{ $result->links() }} --}}
    </div>
</div>
@endsection
