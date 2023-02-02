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
</section>
@endsection
