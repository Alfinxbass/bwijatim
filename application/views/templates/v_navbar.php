<nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top garis1">
    <div class="container">
        <img src="<?= base_url('assets/front/img/logos.png'); ?>" height="50" href="#">
        <button class="navbar-toggler sm-icon" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon sm-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto fw-bold garis2">
                <li class="nav-item garis3">
                    <a class="nav-link text-white garis4" style="font-size:16px;" aria-current="page"
                        href="<?= base_url() ;?>">Beranda</a>
                </li>
                <li class="nav-item dropdown garis3">
                    <a class="nav-link dropdown-toggle text-white garis4" style="font-size:16px;" href="#" id="navbarDropdown"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Profil
                    </a>
                    <div class="dropdown-menu bg-success" aria-labelledby="navbarDropdown">
                            <a class=" fw-bold text-white garis3 garis4" style="font-size:16px;"
                                href="<?= base_url('visimisi'); ?>">Visi & Misi</a>
                            <a class=" fw-bold text-white garis3 garis4" style="font-size:16px;"
                                href="<?= base_url('sejarah'); ?>">Sejarah</a>
                            <a class=" fw-bold text-white garis3 garis4" style="font-size:16px;"
                                href="<?= base_url('struktur'); ?>">Struktur</a>
                    </div>
                </li>
                <li class="nav-item dropdown garis3">
                    <a class="nav-link dropdown-toggle text-white garis4" style="font-size:16px;" href="#" id="navbarDropdown"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Wakaf
                    </a>
                    <div class="dropdown-menu bg-success" aria-labelledby="navbarDropdown">
                            <a class=" fw-bold text-white garis3 garis4" style="font-size:16px;"
                                href="<?= base_url('regulation'); ?>">Regulasi</a>
                            <a class=" fw-bold text-white garis3 garis4" style="font-size:16px;"
                                href="<?= base_url('literasi'); ?>">Literasi Wakaf</a>
                            
                    </div>
                </li>
                <li class="nav-item garis3">
                    <a class="nav-link text-white  garis4" style="font-size:16px;" href="https://www.lib.bwi.go.id/">Diglib</a>
                </li>
                <li class="nav-item garis3">
                    <a class="nav-link text-white  garis4" style="font-size:16px;" href="<?= base_url('berita'); ?>">Berita</a>
                </li>
                <li class="nav-item garis3">
                    <a class="nav-link text-white  garis4" style="font-size:16px;" href="<?= base_url('kontak'); ?>">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>