@extends('layouts.template')
@section ('content')

<div class="jumbotron bg-cover text-white"
    style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url(/img/product/product.jpg); padding: 120px; width: 100%;">
    <div class="container">
        <h1 class="display-7">Produk</h1>
        <!-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
            featured content or information.</p> -->
    </div>
</div>
<div class="container">
    <div class="row isi-header">
        <div class="col-md-6">
            <img src="/img/product/GP.png" class="header-produk pb-4" alt="GP">
        </div>
        <div class="col-md-6">
            <article>
                <h3 class="fw-bold">Informasi Produk</h3>
                <p>
                    Lembaran akrilik dari Akrilik Laser Cutting dibuat dari 100% MMA murni (metil metrakrilat monomer) yang menjamin
                    produk akrilik yang dihasilkan memiliki kualitas tertinggi. Bahan ini juga memastikan tingkat
                    kejernihan yang sangat baik, ketahanan terhadap cuaca dan kekuatan tinggi. Laboratorium Penjamin
                    Pelaksana (Underwriters) telah memberikan produk sertifikasi UL-94HB, yang merupakan ambang bakar
                    tertinggi untuk lembaran akrilik dengan transmisi cahaya 92%. Produk ini dapat dibentuk dalam
                    temperatur tinggi (thermoformed), dipotong, dibor, dilengkungkan, diolah dengan mesin CNC, diukir,
                    diasah dan dilem.
                </p>
                <p>
                    Kualitas ASTARIGLAS® GP mengikuti standar-standar kualitas yang ada di dunia yang menuntut kualitas
                    tinggi, memberikan karakteristik optis yang sangat baik, stabilitas cahaya dan tingkat tekanan
                    internal yang rendah untuk performa yang konsisten.
                </p>
                <p>
                    ASTARIGLAS® GP tersedia dalam berbagai macam standar ukuran dan ketebalan, bening maupun berwarna.
                </p>
            </article>
            <article>
                <h3 class="fw-bold">Karakteristik</h3>
                <p>
                    ASTARIGLAS® GP adalah bahan termoplastik yang ringan dan kaku, dengan resistensi kerusakan (pecah)
                    yang lebih tinggi dibandingkan kaca biasa dan sangat tahan kondisi cuaca. ASTARIGLAS® GP dapat
                    dengan mudah digergaji mesin, dibentuk dalam suhu tinggi dan disemen, serta sedikit menyerap sinar
                    ultraviolet.
                </p>
            </article>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <h5 class="pb-4">Varian Produk</h5>
        <div class="justify-content-center">
            <div class="col-md-12">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active button" id="pills-all-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all"
                            aria-selected="true">BENING</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link button" id="pills-timbul-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-timbul" type="button" role="tab" aria-controls="pills-timbul"
                            aria-selected="false">PUTIH SUSU DAN PUTIH SOLID</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link button" id="pills-neonbox-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-neonbox" type="button" role="tab" aria-controls="pills-neonbox"
                            aria-selected="false">WARNA TRANSPARAN</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link button" id="pills-reklame-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-reklame" type="button" role="tab" aria-controls="pills-reklame"
                            aria-selected="false">WARNA TINTED</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link button" id="pills-digitalcreative-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-digitalcreative" type="button" role="tab"
                            aria-controls="pills-digitalcreative" aria-selected="false">WARNA SOLID DAN BURAM</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link button" id="pills-iot-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-iot" type="button" role="tab" aria-controls="pills-iot"
                            aria-selected="false">WARNA FLUORESCENT / NEON</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-all" role="tabpanel"
                        aria-labelledby="pills-all-tab" tabindex="0">
                        <div class="row row-cols-1 row-cols-md-3 g-4">

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-timbul" role="tabpanel" aria-labelledby="pills-timbul-tab"
                        tabindex="0">
                        <div class="row row-cols-1 row-cols-md-3 g-4">

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-neonbox" role="tabpanel" aria-labelledby="pills-neonbox-tab"
                        tabindex="0">
                        <div class="row row-cols-1 row-cols-md-3 g-4">

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-reklame" role="tabpanel" aria-labelledby="pills-reklame-tab"
                        tabindex="0">
                        <div class="row row-cols-1 row-cols-md-3 g-4">

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-digitalcreative" role="tabpanel"
                        aria-labelledby="pills-digitalcreative-tab" tabindex="0">
                        <div class="row row-cols-1 row-cols-md-3 g-4">

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-iot" role="tabpanel" aria-labelledby="pills-iot-tab"
                        tabindex="0">
                        <div class="row row-cols-1 row-cols-md-3 g-4">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@stop