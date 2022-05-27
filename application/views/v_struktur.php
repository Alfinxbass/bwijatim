<div class="super_container">

    <div class="home ms-0">
        <div class="breadcrumbs_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="<?= base_url(); ?>" style="text-decoration:none;" class="">Beranda</a></li>
                                <li>Struktur & Tugas</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center ms-1 me-1 mt-2">
        <div class="col-md-6" style="text-align:justify;">
            <h4 class="mt-3 fw-bold text-center">Struktur Orgnaisasi </h4>
            <p class="text-dark"><b><?= $row->isi_susunan; ?></b></p>
        </div>
    </div>
    <div class="row justify-content-center ms-1 me-1 mt-2">
        <div class="col-md-6" style="text-align:justify;">
            <h4 class="mt-3 fw-bold text-center">Tugas & Wewenang </h4>
            <p class="text-dark"><b><?= $tug->isi_tugas; ?></b></p>
        </div>
    </div>

    
</div>
<br><br><br><br><br><br>