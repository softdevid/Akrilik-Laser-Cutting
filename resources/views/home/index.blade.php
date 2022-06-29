@extends('layouts.template')
@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div id="carousel-gambar">
                <img src="/img/carousel/4.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <div class="carousel-item">
            <div id="carousel-gambar">
                <img src="/img/carousel/5.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <div class="carousel-item">
            <div id="carousel-gambar">
                <img src="/img/carousel/6.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container py-5">
    <article>
        <div id="judul" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">
            <h1>Prolog</h1>
            <p>Tentang Akrilik Laser Cutting</p>
        </div>
        <div class="py-5" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">
            <b>CV. Mekar Cutting Digital</b> adalah perusahaan Advertising dan Digital Marketing yang berbasis di kota
            Purbalingga.
            <b>CV. Mekar Cutting Digital</b> sudah berpengalaman dan memiliki ratusan portfolio dalam bidang periklanan,
            promosi dan branding
            selama lebih dari 5 tahun. Spesialis Jasa Pembuatan Reklame Huruf Timbul, Neon Box, Baliho dan Branding
            instansi yang selalu mengutamakan
            kualitas dan mengedepankan professionalisme kerja serta berkomitmen memberikan harga yang realistis bagi
            klien. Selain produksi Reklame, <b>CV. Mekar Cutting Digital</b> juga melayani kebutuhan Digital Marketing
            sebagai solusi pemasaran digital. Kami menawarkan beberapa macam kebutuhan akan jasa digital marketing
            antara lain, pembuatan website, optimasi website, audit dan analisa website / social media, pengelolaan
            social media, foto produk, pembuatan logo, personal / politik branding. <b>CV. Mekar Cutting Digital</b>
            adalah One Stop Solutions yang tepat untuk membangun Branding produk atau usaha Anda, menciptakan strategi
            pemasaran baik offline maupun online. Suatu kebanggaan tersendiri bagi kami untuk membantu bisnis anda
            tumbuh dan berkembang di era digital. Membantu mendapatkan lebih banyak leads dari trafik, Memenangkan
            penghargaan atas pekerjaan dan sumber daya kami selama ini.
            </p>
        </div>
    </article>
    <article>
        <div id="judul" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">
            <h1>Layanan</h1>
            <p>Layanan terbaik di Purbalingga</p>
        </div>
        <div class="py-5" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="h-100 border-0">
                        <img src="/img/services/web.jpg" class="card-img-top" id="gambar" alt="...">
                        <div class="card-body mt-3">
                            <h5 class="card-title">Pembuatan Website</h5>
                            <p class="card-text">Website menjadi fasilitas sangat penting untuk pemasaran dan scale up
                                bisnis di era digital ini. Miliki sekarang!</p>
                            <a href="/services/pembuatan-website" class="btn btn-dark" id="button">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="h-100 border-0">
                        <img src="/img/services/3.png" class="card-img-top" id="gambar" alt="...">
                        <div class="card-body mt-3">
                            <h5 class="card-title">Produksi huruf timbul</h5>
                            <p class="card-text">Huruf timbul kini menjadi bagian penting dalam Branding Offline.
                                Banyaknya manfaat dan kegunaan menjadikan huruf timbul makin populer.</p>
                            <a href="/services/pembuatan-huruf-timbul" class="btn btn-dark" id="button">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="h-100 border-0">
                        <img src="/img/services/neonbox.jpg" class="card-img-top" id="gambar" alt="...">
                        <div class="card-body mt-3">
                            <h5 class="card-title">Produksi Neon Box</h5>
                            <p class="card-text">Neon box merupakan produk paling penting yang harus dimiliki setiap
                                pengusaha baik pemula maupun profesional. Miliki sekarang!</p>
                            <a href="/services/pembuatan-neon-box" class="btn btn-dark" id="button">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>
<article data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">
    <div id="judul">
        <h1>Hasil Kerja</h1>
        <p>Baca tentang proyek terbaru kami</p>
    </div>
    <div class="py-5 container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card bg-black overlay card-hover4 border-0" data-aos="fade-down" data-aos-duration="1000"
                    data-aos-delay="200">
                    <a href="/portfolio/foto-bali" class="text-white">
                        <img src="/img/portfolio/3.png" id="gambar" class="card-img" alt="Huruf Timbul">
                        <div class="overlay-content card-img-overlay text-bottom">
                            <h5>Foto Bali</h5>
                            <span>Huruf Timbul</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card bg-black overlay card-hover5 border-0" data-aos="fade-down" data-aos-duration="1000"
                    data-aos-delay="250">
                    <a href="/portfolio/neon-box-smk" class="text-white">
                        <img src="/img/portfolio/neonbox.jpg" id="gambar" class="card-img" alt="Huruf Timbul">
                        <div class="overlay-content card-img-overlay text-bottom">
                            <h5>Neonbox</h5>
                            <span>Neonbox</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card bg-black overlay card-hover6 border-0" data-aos="fade-down" data-aos-duration="1000"
                    data-aos-delay="300">
                    <a href="/portfolio/web-instansi" class="text-white">
                        <img src="/img/portfolio/web.png" id="gambar" class="card-img" alt="Huruf Timbul">
                        <div class="overlay-content card-img-overlay text-bottom">
                            <h5>Website Perusahaan</h5>
                            <span>Digital Creative</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</article>
<article>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner penawaran">
            <div class="carousel-item active">
                <img src="/img/carousel/2.jpg" class="d-block w-100" alt="..." style="height: 610px;">
                <div class="carousel-caption d-md-block">
                    <div class="text-dark" style=" margin-bottom: 170px; font-weight:1000;">
                        <h1 class="shadow"><span class="badge bg-dark text-white">Mekar Laser Cutting Digital</span>
                        </h1>
                        <p>- Saatnya mengembangkan bisnis dengan tim yang tepat -</p>
                        <a href="telp:+6285728060268" type="button" class="btn-penawaran">Dapatkan Penawaran</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
<article data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">
    <div id="judul" class="p-5">
        <h1>Galeri</h1>
        <p>Kegitan kami</p>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
            <div class="col">
                <div class="h-100 border-0">
                    <img src="/img/insight1.jpg" class="card-img-top" id="gambar" alt="...">
                    <div class="card-body mt-3">
                        <h5 class="card-title">Pengelasan kerangka Neon Box</h5>
                        <p class="card-text">Ini adalah kegiatan proses pengelasan kerangka untuk neon box
                            sebelum
                            dipasang neon box tersebut.</p>
                        <a href="#" class="btn btn-dark" id="button">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="h-100 border-0">
                    <img src="/img/insight2.jpg" class="card-img-top" id="gambar" alt="...">
                    <div class="card-body mt-3">
                        <h5 class="card-title">Pemasangan desain Neon Box</h5>
                        <p class="card-text">Ini adalah kegiatan pemasangan neon box sebelum di satukan dengan
                            kerangka neon box</p>
                        <a href="#" class="btn btn-dark" id="button">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="h-100 border-0">
                    <img src="/img/insight3.jpg" class="card-img-top" id="gambar" alt="...">
                    <div class="card-body mt-3">
                        <h5 class="card-title">Pemasangan Huruf Timbul</h5>
                        <p class="card-text">Ini adalah kegiatan pemasangan tulisan timbul. Di gambar tersebut
                            adalah contoh kegiatan pemasangan tulisan timbul untuk penamaan suatu ruangan.</p>
                        <a href="#" class="btn btn-dark" id="button">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
<div class="container py-5">
    <article>
        <div id="judul" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">
            <h1>Mengapa Memilih Kami?</h1>
            <p>Alasan untuk memilih kami</p>
        </div>
        <div class="py-5" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">
            <p>
                Apabila bisnis adalah hal utama bagi Anda, hal yang perlu dilakukan adalah fokus dan allout dalam
                mempromosikannya. Dengan menggunakan jasa kami produk dan tempat usaha akan lebih sering dilirik oleh
                masyarakat.</p>

            <p><b>Manfaat Jasa Online Advertising</b></p>

            <p>1. Kami berkomitmen untuk membantu dan melayani kebutuhan advertising Anda, semua dikerjakan secara
                online. Tanpa perlu datang dan menunggu yang membuang waktu, tanpa mengeluarkan biaya transportasi.
                Cukup hubungi kami, kami yang akan mengerjakan semua.</p>

            <p>2. Memiliki Daya Tarik Bagi Konsumen.
                Produk Advertising digunakan sebagai identitas yang penempatannya bisa ditempat, digantung dll. Namun
                sangat efektif untuk memikat konsumen yang lewat di sekitarnya. Hal ini dikarenakan kemewahan dan
                keistimewaan pada produk advertising akan memberikan kesan tersendiri bagi konsumen yang melihatnya.</p>

            <p>3. Branding menjadi mudah dibaca dan lebih jelas.
                Melakukan iklan usaha melalui produk advertising akan lebih mudah terlihat dan jelas dibaca, misalnya
                menggunakan huruf timbul. Karena huruf timbul menggunakan huruf yang besar, tegas, dan menonjol.
                Terlebih jika pada huruf timbul diberi efek lampu LED akan semakin memudahkan khalayak umum
                mengetahuinya. Dari sinilah konsumen bisa saja berdatangan untuk mencoba produk atau jasa yang
                ditawarkan oleh usaha tersebut.</p>

            <p>4. Nama perusahaan mudah diingat dan semakin terkenal.
                Dengan keahlian desain yang kami miliki, kami akan membantu Anda membuat produk yang menarik sehingga
                khalayak umum akan mudah melihat dan mengingatnya. Masyarakat yang melihatnya lama kelamaan akan
                familiar dengan logo atau brand dari huruf timbul perusahaan tersebut dan menjadi terkenal.</p>

            <p>5. Media promosi jangka panjang.
                Produk advertising akan terpasang di depan tempat usaha dan menjadi media promosi jangka panjang yang
                tepat. Dengan membuat signage di Mekar Laser Cutting Digital, kami selalu membuat dari bahan yang
                berkualitas dan mudah dalam perawatannya, sehingga signage Anda akan lebih tahan lama.</p>

            <p>6. Membuat tempat usaha / kantor mudah dicari
                Sudah barang tentu dengan menggunakan produk advertising tempat usaha dan kantor Anda lebih mudah dicari
                oleh masyarakat.</p>
        </div>
    </article>
</div>
<div class="justify-content-center align-items-center">
    <center>
        <img src="/img/community.png" alt="" style="width: 400px;">
    </center>
</div>
@stop