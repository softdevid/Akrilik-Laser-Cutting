@extends('layouts/template')
@section('content')

<div class="jumbotron bg-cover text-white" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url(/img/about/workphase.png); padding: 120px; width: 100%;">
    <div class="container">
        <h1 class="display-7">Fase Kerja</h1>
        <!-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
            featured content or information.</p> -->
    </div>
</div>

<div class="container py-5">
    <div class="mb-3" style="min-width: 100%;">
        <div class="row g-0 justify-content-center align-items-center">

            <div class="col-md-6 text-center mt-5">
                <!-- <img src="..." class="img-fluid rounded-start" alt="..."> -->
                <i class="fa fa-user img-fluid rounded-start" style="font-size: 100px;" data-aos="fade-down" data-aos-duration="1000"></i>
            </div>
            <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="150">
                <div class="card-body">
                    <h3 class="card-title pt-5">Pertama, izinkan kami mengenal anda</h3>
                    <p class="card-text pt-3">Halo calon klien, mungkin Anda bertanya bagaimana cara order jasa kami di
                        Mekar Cutting Digital? Izinkan kami berkenalan dengan Anda terlebih dahulu. Kemudian konsultasikan
                        kebutuhan atau project Anda pada Customer Support kami.</p>
                </div>
            </div>

            <div class="col-md-6 text-center mt-5">
                <!-- <img src="..." class="img-fluid rounded-start" alt="..."> -->
                <i class="fa fa-search img-fluid rounded-start" style="font-size: 100px;" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"></i>
            </div>
            <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <div class="card-body">
                    <h3 class="card-title pt-5">Survey</h3>
                    <p class="card-text pt-3">Apabila Anda didalam kota maka Anda akan dijadwalkan untuk bertemu dengan
                        perwakilan tim Mekar Cutting Digital untuk berdiskusi dan orientasi lokasi dengan mengambil ukuran lokasi serta
                        akan dijelaskan lebih detail tentang tahapan perencanaan.</p>
                </div>
            </div>

            <div class="col-md-6 text-center mt-5">
                <!-- <img src="..." class="img-fluid rounded-start" alt="..."> -->
                <i class="fa fa-ruler img-fluid rounded-start" style="font-size: 100px;" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="150"></i>
            </div>
            <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="250">
                <div class="card-body">
                    <h3 class="card-title pt-5">Desain & RAB</h3>
                    <p class="card-text pt-3">Setelah informasi dirasa cukup, maka kami akan melakukan desain ulang dan
                        membuat RAB atau penawaran dengan harga yang realistis.</p>
                </div>
            </div>

            <div class="col-md-6 text-center mt-5">
                <!-- <img src="..." class="img-fluid rounded-start" alt="..."> -->
                <i class="fa fa-pencil img-fluid rounded-start" style="font-size: 100px;" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="200"></i>
            </div>
            <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">
                <div class="card-body">
                    <h3 class="card-title pt-5">Penandatanganan Kontrak & SPK</h3>
                    <p class="card-text pt-3">Setelah Anda menyetujui Desain & RAB kami, langkah selanjutnya adalah
                        penandatanganan Surat Perjanjian Kerjasama (SPK) dan pembayaran Down Payment (DP)</p>
                </div>
            </div>

            <div class="col-md-6 text-center mt-5">
                <!-- <img src="..." class="img-fluid rounded-start" alt="..."> -->
                <i class="fa fa-tools img-fluid rounded-start" style="font-size: 100px;" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="250"></i>
            </div>
            <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="350">
                <div class="card-body">
                    <h3 class="card-title pt-5">Produksi</h3>
                    <p class="card-text pt-3">Setelah itu kami mulai membeli bahan baku persiapan guna produksi.
                        Setelahnya pengerjaan proyek dengan estimasi waktu yang telah ditentukan oleh perencanaan. Tidak
                        lupa kami akan melakukan Quality Control (QC) untuk memastikan hasil produksi</p>
                </div>
            </div>

            <div class="col-md-6 text-center mt-5">
                <!-- <img src="..." class="img-fluid rounded-start" alt="..."> -->
                <i class="fa fa-circle-check img-fluid rounded-start" style="font-size: 100px;" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300"></i>
            </div>
            <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <div class="card-body">
                    <h3 class="card-title pt-5">Pengiriman & Setting Lokasi</h3>
                    <p class="card-text pt-3">Setelah itu proses pengiriman dan Setting di lokasi serta QC terakhir
                        ketika setelah pemasangan untuk memastikan hasilnya sesuai dengan rencana.</p>
                </div>
            </div>
        </div>
    </div>
</div>


@stop