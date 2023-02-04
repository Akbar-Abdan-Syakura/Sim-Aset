@extends('layouts.v_main')
@section('title', 'Daftar Hasil Monitoring Aset')

@section('content')
<div class="card">
    <div class="card-header">
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Aset</th>
                    <th>Nama</th>
                    <th>Penempatan</th>
                    <th>Spek</th>
                    <th>Quantity</th>
                    <th>Harga</th>
                    <th>Cabang</th>
                    <th>Tanggal Perolehan</th>
                    <th>Usia Asset</th>
                    <th>Umur Ekonomis</th>
                    <th>Kondisi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($assets as $key => $asset)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{ $asset->kd_aset }}</td>
                    <td>{{ $asset->nama }}</td>
                    <td>{{ $asset->penempatan->penempatan ?? "-" }}</td>
                    <td>{{ $asset->spek }}</td>
                    <td>{{ $asset->qty }}</td>
                    <td>{{ intToRupiah($asset->harga) }}</td>
                    <td>{{ $asset->cabang->nama_cbng ?? "-" }}</td>
                    <td>{{ $asset->tgl_perolehan }}</td>
                    <td>{{ getUsiaAsset($asset->tgl_perolehan) }} Tahun</td>
                    <td>{{ $asset->umur->umur_ekonomis }} tahun</td>
                    <td>
                        <span class="badge @if($asset->kondisi_id==3) badge-warning @else badge-danger @endif">{{ $asset->kondisi->kondisi }}</span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
