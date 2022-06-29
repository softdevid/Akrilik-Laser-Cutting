@extends('layouts.template')
@section('content')


<div class="jumbotron bg-cover text-white" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url(/img/about/team.jpg); padding: 120px; width: 100%;">
    <div class="container">
        <h1 class="display-7">Team</h1>
        <!-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
            featured content or information.</p> -->
    </div>
</div>

<div class="container">
    <div class="tab-pane fade show active mt-5" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($team as $team)
            <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="h-100 border-0">
                    <img src="/img/about/{{$team->gambar}}" class="card-img-top" id="img-team" alt="...">
                    <div class="card-body mt-3">
                        <h5 class="card-title">{{$team->nama}}</h5>
                        <p>{{$team->jabatan}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@stop