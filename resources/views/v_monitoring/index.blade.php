@extends('layouts.v_main')
@section('title', 'Daftar Hasil Monitoring Aset')

@section('content')
<div class="card">
    <div class="card-body">

        <button class="btn btn-primary mb-4" id="generate">Generate</button>
        <x-cabang-navbar></x-cabang-navbar>
        <table id="example1" class="table table-bordered table-striped d-none">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Aset</th>
                    <th>Nama</th>
                    <th>Penempatan</th>
                    <th>Spek</th>
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
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $asset->kd_aset }}</td>
                    <td>{{ $asset->category->nama }}</td>
                    <td>{{ $asset->penempatan->penempatan ?? '-' }}</td>
                    <td>{{ $asset->category->spek }}</td>
                    <td>{{ intToRupiah($asset->harga) }}</td>
                    <td>{{ $asset->cabang->nama_cbng ?? '-' }}</td>
                    <td>{{ $asset->tgl_perolehan }}</td>
                    <td>{{ getUsiaAsset($asset->tgl_perolehan) }} Tahun</td>
                    <td>{{ $asset->category->umur->umur_ekonomis }}</td>
                    <td>
                        <span class="badge @if ($asset->kondisi_id == 3) badge-warning @elseif($asset->kondisi_id == 4) badge-danger @else badge-success @endif">{{ $asset->kondisi->kondisi }}</span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section("custom-scripts")
<script>
    $("#generate").on("click", function(){
        $("#example1").removeClass("d-none");
    });
</script>
@endsection