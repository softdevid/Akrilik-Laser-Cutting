@extends('layouts/template')
@section('content')

<!-- <div class="jumbotron bg-cover text-white" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url(/img/services/service.png); padding: 120px; width: 100%;">
    <div class="container">
        <h1 class="display-7">Layanan</h1>        
    </div>
</div> -->

<!-- <div>
    <img src="/img/1.jpg" alt="" style="width: 100%; max-height: 300px;">
</div> -->
<div  style="border-top: 10px solid black;"></div>
<div class="container">
    <div class="pt-3">
        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">Semua</button>
            </li>  
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-advertising-tab" data-bs-toggle="pill" data-bs-target="#pills-advertising" type="button" role="tab" aria-controls="pills-advertising" aria-selected="false">Periklanan</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-digitalmarketing-tab" data-bs-toggle="pill" data-bs-target="#pills-digitalmarketing" type="button" role="tab" aria-controls="pills-digitalmarketing" aria-selected="false">
					Pemasaran Digital</button>
            </li>
      </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($services as $services)
                    <div class="col" data-aos="fade-down" data-aos-duration="1000">
                        <div class="h-100 border-0">
                            <img src="/img/services/{{$services->gambar}}" class="card-img-top" id="gambar" alt="...">
                            <div class="card-body mt-3">
                                <h5 class="card-title">{{ $services->judul_service }}</h5>
                                <p class="card-text">{{ \Illuminate\Support\Str::limit($services->kutipan, 60, '...') }}</p>                                
                              	<a href="/services/{{ $services->id }}" class="btn btn-dark" id="button">Lebih lanjut</a>                              	
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
          </div>
            <div class="tab-pane fade" id="pills-advertising" role="tabpanel" aria-labelledby="pills-advertising-tab" tabindex="0">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($advertising as $advertising)
                    <div class="col" data-aos="fade-down" data-aos-duration="1000">
                        <div class="h-100 border-0">
                            <img src="/img/services/{{$advertising->gambar}}" class="card-img-top" id="gambar" alt="...">
                            <div class="card-body mt-3">
                                <h5 class="card-title">{{$advertising->judul_service}}</h5>
                                <p class="card-text">{{ \Illuminate\Support\Str::limit($advertising->kutipan, 60, '...') }}</p>                                
                              <a href="/services/{{ $services->id }}" class="btn btn-dark" id="button">Lebih lanjut</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-digitalmarketing" role="tabpanel" aria-labelledby="pills-digitalmarketing-tab" tabindex="0">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($digital as $digital)
                    <div class="col" data-aos="fade-down" data-aos-duration="1000">
                        <div class="h-100 border-0">
                            <img src="/img/services/{{$digital->gambar}}" class="card-img-top" id="gambar" alt="...">
                            <div class="card-body mt-3">
                                <h5 class="card-title">{{$digital->judul_service}}</h5>
                                <p class="card-text">{{ \Illuminate\Support\Str::limit($digital->kutipan, 60, '...') }}</p>                                
                              <a href="/services/{{ $services->id }}" class="btn btn-dark" id="button">Lebih lanjut</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@stop