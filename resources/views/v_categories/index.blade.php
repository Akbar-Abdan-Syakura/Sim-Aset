@extends('layouts.v_main')
@section('title', 'Daftar Barang Inventaris Aset Tetap PT. Dapensi Trio Usaha')

@section('content')
<div class="card">
    <div class="card-header">
        @canany(['isManager', 'isAdmin'])
        <a href="{{ route('category.create') }}" type="button" class="btn btn-success btn-md float-left">
            <i class="fas fa-plus nav-icon"></i>
            &nbsp;&nbsp;
            Add Data
        </a>
        @endcanany
    </div>
    <div class="card-body">
        <table id="myTable" class="table table-bordered table-striped mb-4">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Aset</th>
                    <th>Nama Aset</th>
                    <th>Spesifikasi</th>
                    <th>Umur Ekonomis Aset</th>
                    @canany(['isManager', 'isAdmin'])
                    <th>Action</th>
                    @endcanany
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $key=> $row)
                <tr>
                    <td>{{ $categories->firstItem() + $key }}</td>
                    <td>{{ $row->kd_category }}</td>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->spek }}</td>
                    <td>{{ $row->umur->umur_ekonomis ??"-" }}</td>
                    @canany(['isManager', 'isAdmin'])
                    <td class="text-sm-center">
                        <a href="{{ route('category.edit', $row->id) }}" class="btn btn-sm btn-warning">
                            Edit Data
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                    @endcanany
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $categories->links() }}
    </div>
</div>
@endsection

@section("custom-scripts")
{{-- <script>
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
</script> --}}
@endsection