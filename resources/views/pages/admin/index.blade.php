@extends('layouts.admin.main')
@section('title', 'Admin Dashboard')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#"> Dashboard</a></div>
            </div>
        </div>

        <div class="row">
            <!-- Card Total Pengguna -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i> <!-- Ikon pengguna tetap -->
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Pengguna</h4>
                        </div>
                        <div class="card-body">
                            {{ $users }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Total Produk -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-newspaper"></i> <!-- Tetap menggunakan ikon -->
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Produk</h4>
                        </div>
                        <div class="card-body">
                            {{ $products }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Diskon (Flash Sale) dengan Ikon Sale -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-tags"></i> <!-- Ikon sale dari Font Awesome -->
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Diskon</h4>
                        </div>
                        <div class="card-body">
                            {{ $flashsales }} <!-- Menampilkan jumlah flash sale -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Distributor di sebelah Diskon -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-info">
                        <i class="fas fa-truck"></i> <!-- Ikon truck untuk distributor -->
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Distributor</h4>
                        </div>
                        <div class="card-body">
                            {{ $distributors }} <!-- Menampilkan jumlah distributor -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
