@extends('layouts.v_main')
@section('title', 'Dashboard Sistem Informasi Manajemen Aset PT. Dapensi Trio Usaha')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $totalAsset }}</h3>
                            <br>
                            <p>Total Aset</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-archive"></i>
                        </div>
                        <a href="/aset" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $totalRekomendasi }}</h3>
                            <br>
                            <p>Total Rekomendasi</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <a href="/rekomendasi" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $totalPengajuan }}</h3>
                            <br>
                            <p>Total Pengajuan</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-sticky-note"></i>
                        </div>
                        <a href="/pengajuan" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $totalMonitoring }}</h3>
                            <br>
                            <p>Total Data Monitoring</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <a href="/monitoring" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            Pengajuan Terakhir
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Kode Pengajuan</th>
                                        <th scope="col">Nama Aset</th>
                                        <th scope="col">Harga Aset</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Pemohon</th>
                                        <th scope="col">Diajukan Pada</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($latestPengajuan as $key => $item)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>{{ $item->kd_pengajuan }}</td>
                                            <td>{{ $item->category->nama }}</td>
                                            <td>{{ intToRupiah($item->harga) }}</td>
                                            {{-- <td>{{ $item->status }}</td> --}}
                                            <td>
                                                <span
                                                    class="badge
                        @if ($item->status == 'tolak') badge-danger @elseif($item->status == 'setuju') badge-primary @elseif ($item->status == 'pending') badge-secondary @endif ">
                                                    {{ ucfirst($item->status) }}
                                                </span>
                                            </td>
                                            <td>{{ $item->user->name }}</td>
                                            <td>{{ $item->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            Data Monitoring
                        </div>
                        <div class="card-body">
                            <button class="btn btn-primary mb-4" id="generate">Generate</button>
                            @cannot('isBranch')
                                <x-cabang-navbar></x-cabang-navbar>
                            @endcannot
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
                                                <span
                                                    class="badge @if ($asset->kondisi_id == 3) badge-warning @elseif($asset->kondisi_id == 4) badge-danger @else badge-success @endif">{{ $asset->kondisi->kondisi }}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> --}}
    </section>
@endsection

@section('custom-scripts')
    <script>
        $("#generate").on("click", function() {
            $("#example1").removeClass("d-none");
        });
    </script>
@endsection
