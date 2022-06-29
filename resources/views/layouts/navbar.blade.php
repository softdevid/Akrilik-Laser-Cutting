<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container">
        <ul class="nav justify-content-start align-items-center text-center">
            <li class="nav-item">
                <a class="nav-link text-white left-nav" aria-current="page" href="telp:+6285728060268">+62
                    857-2806-0268</a>
            </li>
        </ul>

        <!-- <ul class="nav d-flex">
            <li class="nav-item">
                <a class="nav-link text-white active" aria-current="page" href="#"><i class="fa-brands fa-youtube"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fa-brands fa-facebook"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fa-brands fa-instagram"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fa-brands fa-twitter"></i></a>
            </li>
        </ul> -->
    </div>
</nav>



<nav class="navbar navbar-expand-lg bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">MEKAR LASER <br>
            <span class="badge bg-dark text-white">Cutting Digital</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "BERANDA" ) ? 'active' : '' }}"href="/">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tentang
                    </a>
                    <ul class="dropdown-menu isi-dropdown" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item {{ ($title === "PROFIL" ) ? 'active' : '' }}" href="/profile">Profil</a></li>
                        <li><a class="dropdown-item {{ ($title === "TIM" ) ? 'active' : '' }}" href="/team">Tim</a></li>
                        <li><a class="dropdown-item {{ ($title === "FASE KERJA" ) ? 'active' : '' }}" href="/work-phase">Fase Kerja</a></li>
                        <li><a class="dropdown-item {{ ($title === "LINGKUP PEKERJAAN" ) ? 'active' : '' }}" href="/scope-of-work">Lingkup Pekerjaan</a></li>
                        <li><a class="dropdown-item {{ ($title === "RUANG PERTANYAAN" ) ? 'active' : '' }}" href="/faq">Ruang Pertanyaan</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "PRODUK" ) ? 'active' : '' }}" href="/product">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "LAYANAN" ) ? 'active' : '' }}" href="/services">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "KONTAK" ) ? 'active' : '' }}" href="/talk">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "HASIL KERJA" ) ? 'active' : '' }}" href="/portfolio">Hasil Kerja</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="/blog"></a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>