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
            <ul class="nav nav-tabs mb-4">
                <li class="nav-item">
                    <a class="nav-link @if (request()->input('type') == 'pending' || request()->input('type') == null) active @endif"
                        href="{{ route('pengajuan') }}">Pending</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (request()->input('type') == 'setuju') active @endif"
                        href="{{ route('pengajuan', ['type' => 'setuju']) }}">Setuju</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (request()->input('type') == 'tolak') active @endif"
                        href="{{ route('pengajuan', ['type' => 'tolak']) }}">Tolak</a>
                </li>
            </ul>
            <table id="myTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kode Pengajuan</th>
                        <th>User Yang Mengajukan</th>
                        <th>Nama Aset</th>
                        <th>Jumlah Aset Yang Diajukan</th>
                        <th>Harga</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Status</th>
                        @can('isGm')
                            @if (request()->input('type') !== 'tolak' && request()->input('type') !== 'setuju')
                                <th>Action</th>
                            @endif
                        @endcan
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
                            <td>{{ intToRupiah($row->harga) }}</td>
                            <td>{{ $row->created_at }}</td>
                            <td>
                                <span
                                    class="badge
                        @if ($row->status == 'tolak') badge-danger @elseif($row->status == 'setuju') badge-primary @elseif ($row->status == 'pending') badge-secondary @endif ">{{ ucfirst($row->status) }}</span>
                            </td>

                            @can('isGm')
                                @if (request()->input('type') !== 'tolak' && request()->input('type') !== 'setuju')
                                    <td class="text-md-center">
                                        <form action="{{ route('update.pengajuan', $row->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="status" value="setuju">
                                            <button type="submit" class="btn btn-primary btn-accept"
                                                data-id="{{ $row->id }}">Terima
                                                &nbsp;
                                                <i class='fas fa-stamp' style='font-size:18px'></i>
                                            </button>
                                        </form>
                                        &nbsp;
                                        <form action="{{ route('update.pengajuan', $row->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="status" value="tolak">
                                            <button type="button" class="btn btn-danger btn-reject">Tolak
                                                &nbsp;
                                                <i class='fas fa-window-close' style='font-size:18px'></i>
                                            </button>

                                        </form>
                                    </td>
                                @endif
                            @endcan
                        </tr>
                    @endforeach
            </table>
            {{ $data->links() }}
        </div>
    </div>
@endsection


@section('custom-scripts')
    <script>
        $(".btn-accept").on("click", function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Apakah anda yakin?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya terima pengajuan!',
                cancelButtonText: 'Batalkan!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).closest("form").submit();
                }
            });
        })
        $(".btn-reject").on("click", function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Apakah anda yakin?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya tolak pengajuan!',
                cancelButtonText: 'Batalkan!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).closest("form").submit();
                }
            });
        })
    </script>
@endsection
