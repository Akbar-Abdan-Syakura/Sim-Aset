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
        @cannot('isBranch')
        <x-cabang-navbar></x-cabang-navbar>
        @endcannot
        <table id="myTable" class="table table-bordered table-striped mb-4">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Aset</th>
                    <th>Nama Aset</th>
                    <th>Tanggal Perolehan</th>
                    <th>Lokasi</th>
                    <th>Penempatan</th>
                    <th>Spesifikasi</th>
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
                    <td>{{ $result->firstItem() + $key }}</td>
                    <td>{{ $row->category->kd_category }}</td>
                    <td>{{ $row->category->nama }}</td>
                    <td>{{ $row->tgl_perolehan }}</td>
                    <td>{{ $row->cabang->nama_cbng ??"-" }}</td>
                    <td>{{ $row->penempatan->penempatan??"-" }}</td>
                    <td>{{ $row->category->spek }}</td>
                    <td>{{ $row->category->umur->umur_ekonomis ??"-" }}</td>
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
                        <form id="form-delete" action="{{ route('destroy.aset', $row->id) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" form="form-delete" class="btn btn-sm btn-danger btn-delete">
                                Hapus Data
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>

                    </td>
                    @endcanany
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $result->links() }}
    </div>
</div>
@endsection

@section("custom-scripts")
<script>
    $(function() {
        $(".btn-delete").on("click", function(e){
            e.preventDefault();
            var form = $(this).parents('form');

            Swal.fire({
                title: "Apakah anda yakin ?",
                text: "Data aset yang dihapus tidak dapat dikembalikan !",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ya saya yakin!",
                cancelButtonText: "Batalkan!",
                // closeOnConfirm: false
            }, function(isConfirm){
                console.log(form);

                if (isConfirm) form.submit();
            });
            Swal.fire({
                title: "Apakah anda yakin ?",
                text: "Data aset yang dihapus tidak dapat dikembalikan !",
                showDenyButton: true,
                confirmButtonText: "Ya saya yakin!",
                denyButtonText: "Batalkan!",
                }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    form.submit();
                } else if (result.isDenied) {
                    Swal.fire('Batal menghapus data aset', '', 'info')
                }
                })
        })
        });
</script>
@endsection