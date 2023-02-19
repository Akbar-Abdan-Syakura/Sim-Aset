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
                    <a href="/rekomendasi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
                    <a href="/pengajuan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
                    <a href="/monitoring" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td>{{ $item->kd_pengajuan }}</td>
                                    <td>{{ $item->nama_aset }}</td>
                                    <td>{{ intToRupiah($item->harga) }}</td>
                                    <td>{{ $item->status }}</td>
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
</section>
@endsection