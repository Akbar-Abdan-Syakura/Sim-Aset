@extends('layouts.v_main')
@section('title', 'Daftar Rekomendasi Pengelolaan Aset')



@section('content')
<div class="card">
    <div class="card-body">
        <button class="btn btn-primary mb-4" id="generate">Generate</button>
        <table id="example1" class="table table-bordered table-striped d-none">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Aset</th>
                    <th>Nama Aset</th>
                    <th>Kondisi</th>
                    <th>Harga</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($assets as $key => $row)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $row->kd_aset }}</td>
                    <td>{{ $row->category->nama }}</td>
                    <td>{{ $row->kondisi->kondisi ?? '-' }}</td>
                    <td class="text-nowrap">{{ intToRupiah($row->harga) }}</td>
                    <td>
                        <span class="badge @if ($row->status == 'Perlu Diperbaiki') badge-warning @else badge-danger @endif ">
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

@section("custom-scripts")
<script>
    $("#generate").on("click", function(){
        $("#example1").removeClass("d-none");
    });
</script>
@endsection