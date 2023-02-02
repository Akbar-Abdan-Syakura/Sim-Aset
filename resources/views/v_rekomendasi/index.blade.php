@extends('layouts.v_main')
@section('title', 'Daftar Rekomendasi Pengelolaan Aset')



@section('content')
<div class="card">
    <div class="card-header">
        Rekomendasi Pengelolaan Aset
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
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
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($assets as $key => $row)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $row->kd_aset }}</td>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->tgl_perolehan }}</td>
                    <td>{{ $row->cabang->nama_cbng ?? "-" }}</td>
                    <td>{{ $row->penempatan->penempatan ?? "-" }}</td>
                    <td>{{ $row->spek }}</td>
                    <td>{{ $row->qty }}</td>
                    <td>{{ $row->umur->umur_ekonomis ?? "-" }}</td>
                    <td>{{ $row->usia_aset }} Tahun</td>
                    <td>{{ $row->kondisi->kondisi ?? "-" }}</td>
                    <td class="text-nowrap">{{ intToRupiah($row->harga) }}</td>
                    <td>
                        <span class="badge @if($row->status='Perlu Diperbaiki') badge-warning @else badge-danger @endif ">
                            {{ $row->status }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
