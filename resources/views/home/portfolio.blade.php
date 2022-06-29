@extends ('layouts/template')
@section('content')

<div class="container">
    <div class="background-portfolio">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active button" id="pills-all-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all"
                    aria-selected="true">All</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link button" id="pills-timbul-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-timbul" type="button" role="tab" aria-controls="pills-timbul"
                    aria-selected="false">Huruf Timbul</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link button" id="pills-neonbox-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-neonbox" type="button" role="tab" aria-controls="pills-neonbox"
                    aria-selected="false">Neonbox</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link button" id="pills-reklame-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-reklame" type="button" role="tab" aria-controls="pills-reklame"
                    aria-selected="false">Project
                    Reklame</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link button" id="pills-digitalcreative-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-digitalcreative" type="button" role="tab"
                    aria-controls="pills-digitalcreative" aria-selected="false">Digital Creative</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link button" id="pills-iot-tab" data-bs-toggle="pill" data-bs-target="#pills-iot"
                    type="button" role="tab" aria-controls="pills-iot" aria-selected="false">Prototype IOT</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab"
                tabindex="0">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($portfolio as $portfolio)
                    <div class="col">
                        <div class="card bg-black overlay card-hover1 border-0" data-aos="fade-down"
                            data-aos-duration="1000">
                            <a href="/portfolio/<?= $portfolio->slug ?>" class="text-white">
                                <img src="/img/portfolio/<?= $portfolio->gambar ?>" id="gambar" class="card-img"
                                    alt="Portfolio">
                                <div class="overlay-content card-img-overlay text-bottom">
                                    <h5>
                                        <?= $portfolio->judul_produk ?>
                                    </h5>
                                    <span class="text-uppercase">
                                        <?= $portfolio->nama_kategori ?><span>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-timbul" role="tabpanel" aria-labelledby="pills-timbul-tab"
                tabindex="0">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($huruftimbul as $huruftimbul)
                    <div class="col">
                        <div class="card bg-black overlay card-hover1 border-0" data-aos="fade-down"
                            data-aos-duration="1000">
                            <a href="/portfolio/<?= $huruftimbul->slug ?>" class="text-white">
                                <img src="/img/portfolio/<?= $huruftimbul->gambar ?>" id="gambar" class="card-img"
                                    alt="Portfolio">
                                <div class="overlay-content card-img-overlay text-bottom">
                                    <h5>
                                        <?= $huruftimbul->judul_produk ?>
                                    </h5>
                                    <span class="text-uppercase">
                                        <?= $huruftimbul->nama_kategori ?><span>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-neonbox" role="tabpanel" aria-labelledby="pills-neonbox-tab"
                tabindex="0">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($neon as $neon)
                    <div class="col">
                        <div class="card bg-black overlay card-hover1 border-0" data-aos="fade-down"
                            data-aos-duration="1000">
                            <a href="/portfolio/<?= $neon->slug ?>" class="text-white">
                                <img src="/img/portfolio/<?= $neon->gambar ?>" id="gambar" class="card-img"
                                    alt="Portfolio">
                                <div class="overlay-content card-img-overlay text-bottom">
                                    <h5>
                                        <?= $neon->judul_produk ?>
                                    </h5>
                                    <span class="text-uppercase">
                                        <?= $neon->nama_kategori ?><span>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-reklame" role="tabpanel" aria-labelledby="pills-reklame-tab"
                tabindex="0">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($reklame as $reklame)
                    <div class="col">
                        <div class="card bg-black overlay card-hover1 border-0" data-aos="fade-down"
                            data-aos-duration="1000">
                            <a href="/portfolio/<?= $reklame->slug ?>" class="text-white">
                                <img src="/img/portfolio/<?= $reklame->gambar ?>" id="gambar" class="card-img"
                                    alt="Portfolio">
                                <div class="overlay-content card-img-overlay text-bottom">
                                    <h5>
                                        <?= $reklame->judul_produk ?>
                                    </h5>
                                    <span class="text-uppercase">
                                        <?= $reklame->nama_kategori ?><span>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-digitalcreative" role="tabpanel"
                aria-labelledby="pills-digitalcreative-tab" tabindex="0">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($digital as $digital)
                    <div class="col">
                        <div class="card bg-black overlay card-hover1 border-0" data-aos="fade-down"
                            data-aos-duration="1000">
                            <a href="/portfolio/<?= $digital->slug ?>" class="text-white">
                                <img src="/img/portfolio/<?= $digital->gambar ?>" id="gambar" class="card-img"
                                    alt="Portfolio">
                                <div class="overlay-content card-img-overlay text-bottom">
                                    <h5>
                                        <?= $digital->judul_produk ?>
                                    </h5>
                                    <span class="text-uppercase">
                                        <?= $digital->nama_kategori ?><span>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-iot" role="tabpanel" aria-labelledby="pills-iot-tab" tabindex="0">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($iot as $iot)
                    <div class="col">
                        <div class="card bg-black overlay card-hover1 border-0" data-aos="fade-down"
                            data-aos-duration="1000">
                            <a href="/portfolio/<?= $iot->slug ?>" class="text-white">
                                <img src="/img/portfolio/<?= $iot->gambar ?>" id="gambar" class="card-img"
                                    alt="Portfolio">
                                <div class="overlay-content card-img-overlay text-bottom">
                                    <h5>
                                        <?= $iot->judul_produk ?>
                                    </h5>
                                    <span class="text-uppercase">
                                        <?= $iot->nama_kategori ?><span>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


@stop