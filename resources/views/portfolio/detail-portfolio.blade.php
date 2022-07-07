@extends('layouts.template')
@section('content')


<div class="container pt-5">
  <div class="card mb-3" style="min-widht: 100%;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="/img/portfolio/{{ $portfolio->gambar }}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ $portfolio->judul_produk }}</h5>
          <p class="card-text">Kategori Produk: <b class=" text-uppercase">{{ $portfolio->nama_kategori }}</b></p>
          <p class="card-text">Client: {{ $portfolio->client }}</p>
          <p class="card-text">Lokasi:<br> {{ $portfolio->lokasi }}</p>                    
        </div>
      </div>
    </div>
  </div>
</div>
@stop