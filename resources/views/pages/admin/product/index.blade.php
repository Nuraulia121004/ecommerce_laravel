@extends('layouts.admin.main') 
@section('title', 'Admin Product') 
@section('content') 
<div class="main-content"> 
<section class="section"> 
<div class="section-header"> 
<h1>Produk</h1> 
<div class="section-header-breadcrumb"> 
<div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') 
}}"> Dashboard </a></div> 
<div class="breadcrumb-item">Produk</div> 
        </div> 
      </div> 
 
      <a href="#" class="btn btn-icon icon-left btn-primary"><i class="fas faplus"></i> Produk</a> 
      <a href="{{ route ('product.create') }}" class ="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i>Produk</a>
 
        <div class="card-body"> 
            <div class="table-responsive"> 
                <table class="table table-bordered table-md"> 
                    <tr> 
                        <th>No</th> 
                        <th>Nama Produk</th> 
                        <th>Harga Produk</th> 
                        <th>Action</th> 
                    </tr> 
                    @php 
                        $no = 0 
                    @endphp 
                    @forelse ($products as $item) 
                        <tr> 
                            <td>{{ $no += 1 }}</td> 
                            <td>{{ $item->name }}</td> 
                            <td>{{ $item->price }}points</td> 
                            
                            <td> 
                                <a href="#" class="badge badge-info">Detail</a> 
                                <a href="#" class="badge badge-warning">Edit</a> 
                                <a href="" class="badge badge-danger">Hapus</a> 
                            </td> 
                        </tr> 
                    @empty 
                        <td colspan="5" class="text-center">Data Produk Kosong</td> 
                    @endforelse 
                </table> 
            </div> 
        </div> 
    </div> 
</div> 
@endsection