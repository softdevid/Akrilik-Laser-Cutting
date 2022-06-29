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
    <h3>Varian Produk</h3>
    <div class="background-produk">
        <ul class="nav nav-pills mb-3 justify-content-center p-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-bening-tab" data-bs-toggle="pill" data-bs-target="#pills-bening" type="button" role="tab" aria-controls="pills-bening" aria-selected="true">BENING</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-putih-tab" data-bs-toggle="pill" data-bs-target="#pills-putih" type="button" role="tab" aria-controls="pills-putih" aria-selected="false">PUTIH SUSU DAN PUTIH SOLID</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-transparan-tab" data-bs-toggle="pill" data-bs-target="#pills-transparan" type="button" role="tab" aria-controls="pills-transaparan" aria-selected="false">WARNA TRANSPARAN</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-tinted-tab" data-bs-toggle="pill" data-bs-target="#pills-tinted" type="button" role="tab" aria-controls="pills-tinted" aria-selected="false">WARNA TINTED</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-wsb-tab" data-bs-toggle="pill" data-bs-target="#pills-wsb" type="button" role="tab" aria-controls="pills-wsb" aria-selected="false">WARNA SOLID DAN BURAM</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-neon-tab" data-bs-toggle="pill" data-bs-target="#pills-neon" type="button" role="tab" aria-controls="pills-neon" aria-selected="false">WARNA FLUORESCENT / NEON</button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-bening" role="tabpanel" aria-labelledby="pills-bening-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="fw-bold">Bening</h4>
                            <article>
                                Lembaran kilap yang bening, tidak berwarna dan memiliki tingkat transparansi yang tinggi, yang memungkinkan untuk menghantarkan cahaya hingga 92%. Kualitas lain yang juga terdapat pada acrylic kami adalah ketahanan terhadap kondisi cuaca dan ketahanan terhadap keretakan. Menjadikan Astariglas® pilihan yang tepat bagi para pengguna produk acrylic yang membutuhkan bahan/materi tembus pandang, seperti akuarim, peredam suara, dan pembatas keamanan untuk teller di bank.
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-putih" role="tabpanel" aria-labelledby="pills-putih-tab">...</div>
            <div class="tab-pane fade" id="pills-transparan" role="tabpanel" aria-labelledby="pills-transparan-tab">...</div>
            <div class="tab-pane fade" id="pills-tinted" role="tabpanel" aria-labelledby="pills-tinted-tab">...</div>
            <div class="tab-pane fade" id="pills-wsb" role="tabpanel" aria-labelledby="pills-wsb-tab">...</div>
            <div class="tab-pane fade" id="pills-neon" role="tabpanel" aria-labelledby="pills-neon-tab">...</div>
          </div>
    </div>
</div>
@stop