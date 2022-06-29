@extends ('layouts.template')
@section ('content')

<div class="jumbotron bg-cover text-white" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url(/img/services/service.png); padding: 120px; width: 100%;">
    <div class="container">
        <h1 class="display-7"><?= $services['judul_service'] ?></h1>
        <p class="lead"><?= $services['kutipan'] ?></p>
    </div>
</div>
<div class="container">
    <div class="row profile-p">
        <div class="col-md-9 p-3">
            <article>
                <img src="/img/services/<?= $services['gambar'] ?>" class="card-img-top" alt="" style="min-width: 100%; max-height: 580px;">
            </article>
            <article class="pt-3">
                <!-- <p>Jasa Pembuatan Website Profesional, merupakan jasa bikin website yang terbaik berbasis di kota
                    Banyumas, Jawa Tengah.
                    Mekar Laser Cutting Digital melayani pembuatan website untuk semua kalangan, semua instansi dan
                    semua usaha tanpa kecuali. Kami juga telah berpengalaman membuat ratusan website untuk berbagai
                    usaha dan instansi. Kenapa Anda harus memiliki website sendiri? Hal yang harus tertanam dalam
                    pikiran Anda adalah, website itu merupakan sebuah investasi dan aset. Ibarat ruko, ya website itu
                    merupakan sebuah ruko dalam dunia maya. Berikut ini akan kami jabarkan mengapa anda butuh website
                    untuk pengembangan usaha.</p> -->
                <p><?= $services['kutipan'] ?></p>
            </article>
            <article>
                <h3 class="mt-5"><?= $services['judul_service'] ?></h3>
                <p><?= $services['deskripsi'] ?></p>
                <!-- <p>Website dengan domain berbayar dapat meningkatkan kepercayaan konsumen dan calon konsumen. Bayangkan
                    apabila Anda seorang pengusaha yang memiliki produk bagus namun dalam praktek digital marketing
                    hanya menggunakan blog gratisan seperti blogspot, apa kata dunia? Bahkan seorang blogger pemula
                    sekarang ini sudah menggunakan website dengan domain yang berbayar. Nah, maka dari itu sangat
                    penting bagi Anda yang bahkan seorang penguasaha pemula memulai bisnis dengan menggunakan domain
                    premium yang akan jasa pembuatan website Purwokerto urus semuanya.</p>
                <p>Website dapat menyampaikan informasi dalam waktu cepat, serta mempresentasikan jenis usaha Anda
                    kepada calon konsumen secara mendalam dan lebih detail. Anda dapat memberikan informasi melalui
                    dokumen, gambar dan video yang bebas anda taruh dalam halaman website. Sehingga calon konsumen cepat
                    untuk mendapatkan informasi apa yang mereka butuhkan hanya dengan mengunjungi website Anda.</p>
                <ol>
                    <li>Menyampaikan Informasi Dalam Waktu Cepat</li>
                    <li>Mempresentasikan Usaha Secara Mendalam dan Detail</li>
                    <li>Mempromosikan Usaha Yang Dijalankan</li>
                    <li>Mempermudah Transaksi dan Otomatisasi Bisnis</li>
                    <li>Membangun Komunikasi dan Interaksi</li>
                </ol> -->
            </article>
            <div id="contact">
                <div class="container">
                    <div class="row contact-info">
                        <div class="col-md-4">
                            <div class="icon">
                                <i class="fa-solid fa-map-location-dot"></i>
                                <h4>ADDRESS</h4>
                                <a href="https://goo.gl/maps/2jBDUPrU6AGCWgVC6" class="nav-link" target="_blank">Jl. Lingkar Purbalingga</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <i class="fa-solid fa-phone" title="no hp"></i>
                            <h4>PHONE NUMBER</h4>
                            <a href="telp:6281548806114" class="nav-link">+62 815-4880-6114</a>
                        </div>
                        <div class="col-md-4">
                            <i class="fa-solid fa-envelope"></i>
                            <h4>EMAIL</h4>
                            <a href="mailto:mekarlaserc@gmail.com" class="nav-link">mekarlaserc@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <article>
                <h3 class="pt-3">Benefit Menggunakan Jasa Pembuatan Website Profesional</h3>
                <p>Mekar Laser Cutting Digital akan memastikan investasi yang anda keluarkan untuk aset digital, yaitu
                    Website akan memberi Anda banyak benefit. Ibaratnya seperti Anda sudah membeli Ruko untuk usaha Anda
                    di dunia digital.</p>
                <ol>
                    <li>Punya Toko Sendiri</li>
                    <p>Ibarat toko pribadi, website 100% milik Anda, tidak numpang. Sehingga bagus untuk jangka panjang.
                    </p>
                    <li>Mudah Untuk Promosi</li>
                    <p>Promosi lewat medsos, ads berbayar, grup whatsapp, dll, dengan mudah semua bisa diarahkan ke
                        website pribadi.</p>
                    <li>Pede Jualan Online</li>
                    <p>Jasa Pembuatan Website kami akan membuat bisnismu lebih professional, sehingga calon pelanggan
                        akan lebih percaya.</p>
                    <li>Meningkatkan Omset Usaha</li>
                    <p>Seiring meningkatnya kepercayaan, peluang Anda mendapatkan pembeli juga meningkat, begitupun
                        dengan Omset Anda</p>
                    <li>Mudah Akses Data Secara Online</li>
                    <p>Dengan adanya Website, Anda dapat mengakses Data orderan, data kunjungan dan data lainnya melalui
                        Website.</p>
                    <li>Tidak Bergantung Platform Lain</li>
                    <p>Ketika Toko Anda di Marketplace / Medsos bermasalah, Anda masih memiliki Toko utama yang tetap
                        aman</p>
                </ol>
            </article> -->
        </div>
        <div class="col-md-3 p-3">
            <div class="container">
                <div class="row text-center">
                    <div class="services-category1 kategori1 pt-2 border-2 active">
                        <a href="/servies" class="nav-link">
                            <h5>Semua</h5></i>
                        </a>
                    </div>
                    <div class="services-category2 kategori2 border-2 pt-2">
                        <a href="/services/services-category/advertising" class="nav-link">
                            <h5>Periklanan</h5></i>
                        </a>
                    </div>
                    <div class="services-category3 kategori3 pt-2 border-2 active">
                        <a href="/services/services-category/digitalmarketing" class="nav-link">
                            <h5>Pemasaran Digital</h5></i>
                        </a>
                    </div>
                </div>
                <div class="row pt-3">
                    <hr class="line1">
                    <span class="text-uppercase judul-aside">social</span>
                    <br>
                    <div class="social pb-3">
                        <div class="row pt-4 icon-aside">
                            <a href="#" class="nav-link"><i class="fa-brands fa-youtube-square"></i></a>
                            &nbsp;
                            <a class="nav-link" href="#"><i class="fa-brands fa-facebook-square"></i></a>
                            &nbsp;
                            <a class="nav-link" href="#"><i class="fa-brands fa-instagram-square"></i></a>
                            &nbsp;
                            <a class="nav-link" href="#"><i class="fa-brands fa-twitter-square"></i></a>
                        </div>
                    </div>
                    <hr class="line2">
                    <span class="text-uppercase sub-aside">latest case studies</span>
                    <article class="pt-3 sub-item1">
                        <a href="#" class="sub-header">
                            <h6 class="fw-bold">Pagar Besi</h6>
                        </a>
                        <a href="#" class="sub-item">
                            Pekerjaan Besi dan Alumunium
                        </a>
                        <hr>
                    </article>
                    <article class="sub-item2">
                        <a href="#" class="sub-header">
                            <h6 class="fw-bold">Kanopi</h6>
                        </a>
                        <a href="#" class="sub-item">
                            Pekerjaan Besi dan Alumunium
                        </a>
                        <hr>
                    </article>
                    <article class="sub-item3">
                        <a href="#" class="sub-header">
                            <h6 class="fw-bold">Prototype IOT</h6>
                        </a>
                        <a href="#" class="sub-item">
                            Prototype IOT & Digital Creative
                        </a>
                        <hr>
                    </article>
                    <article class="sub-item4">
                        <a href="#" class="sub-header">
                            <h6 class="fw-bold">Food App Dekstop</h6>
                        </a>
                        <a href="#" class="sub-item">
                            Digital Creative
                        </a>
                        <hr>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>


@stop