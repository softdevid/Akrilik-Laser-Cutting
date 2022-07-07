@extends ('layouts/template')
@section ('content')
<div class="jumbotron bg-cover text-white" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url(/img/services/service.png); padding: 120px; width: 100%;">
    <div class="container">
      <h1 class="display-7">{{ $services->judul_service }} </h1>
    </div>
</div>
<div class="container">
    <div class="row profile-p">
        <div class="col-md-8 pt-2">
            <article>
                <img src="/img/services/{{ $services->gambar }}" class="card-img-top" alt="" style="min-width: 100%; max-height: 580px;">
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
                <p>{{ $services->kutipan }}</p>
            </article>
            <article>
                <h3 class="mt-5">{{ $services->judul_service }}</h3>
                <p>{{ $services->deskripsi }}</p>
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
                  <h3>Pesan melalui:</h3>
                    <div class="row contact-info">
                        <div class="col-md-4">
                            <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                                <h4>ADDRESS</h4>
                                <a href="https://goo.gl/maps/2jBDUPrU6AGCWgVC6" class="nav-link" target="_blank">Kalikabong, Kec. Kalimanah, Kabupaten Purbalingga, Jawa Tengah</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <i class="fa-solid fa-phone" title="no hp"></i>
                            <h4>PHONE NUMBER</h4>
                            <a href="telp:+6285728060268" class="nav-link">+62 857-2806-0268</a>
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
        <div class="col-md-4 p-3">
            <div class="container">
                <div class="p-md-4 p-3 form-talk"
                                            style="background-color: #f8f8f8;border-color: #dddddd;border-style: solid;border-width: 1px;border-radius: 2px;">
                                            @if (Session::has('berhasil'))
                                            <div class="alert alert-success" role="alert">
                                                {{ Session::get('berhasil') }}
                                            </div>
                                            @elseif (Session::has('gagal'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ Session::get('gagal') }}
                                            </div>
                                            @endif
                                            <h2 class="fw-bold mb-4">Pemesanan</h2>
                                            <form method="POST" action="/talk/send-mail" enctype="multipart/form-data"
                                                class="needs-validation" novalidate>
                                                @csrf
                                                <div class="mb-2">
                                                    <label for="talk-name" class="form-label">Nama</label>
                                                    <input type="text" name="nama" class="form-control form-control-lg"
                                                        id="talk-name" required>
                                                    <div class="invalid-feedback">
                                                        Isikan nama
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <label for="talk-email" class="form-label">Email</label>
                                                    <input type="email" name="email"
                                                        class="form-control form-control-lg" id="talk-email" required>
                                                    <div class="invalid-feedback">
                                                        Isikan email
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <label for="talk-subject" class="form-label">Subject</label>
                                                    <input type="text" name="subjek"
                                                        class="form-control form-control-lg" id="talk-subject" required>
                                                    <div class="invalid-feedback">
                                                        Isikan subjek
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <label for="talk-message" class="form-label">Pesan
                                                        (Opsional)</label>
                                                    <textarea name="pesan" class="form-control"
                                                        id="talk-message"></textarea>
                                                </div>
                                                <button type="submit" name="kirim" class="btn btn-lg text-white"
                                                    style="padding: 8px 30px 8px 30px; background-color: #173052;">Submit</button>
                                            </form>
                                            <script type="text/javascript">
                                                // Example starter JavaScript for disabling form submissions if there are invalid fields
                                                (() => {
                                                'use strict'

                                                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                                const forms = document.querySelectorAll('.needs-validation')

                                                // Loop over them and prevent submission
                                                Array.from(forms).forEach(form => {
                                                    form.addEventListener('submit', event => {
                                                    if (!form.checkValidity()) {
                                                        event.preventDefault()
                                                        event.stopPropagation()
                                                    }

                                                    form.classList.add('was-validated')
                                                    }, false)
                                                })
                                                })()
                                            </script>
                                        </div>
              <a href="/services" class="btn btn-secondary mt-3">Kembali ke Layanan</a>
            </div>          
        </div>
    </div>
</div>

@stop