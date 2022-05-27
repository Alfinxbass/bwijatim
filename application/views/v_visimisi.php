<div class="super_container">

    <div class="home ms-0">
        <div class="breadcrumbs_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="<?= base_url(); ?>" style="text-decoration:none;" class="">Beranda</a></li>
                                <li>Visi & Misi</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center ms-1 me-1 mt-2">
        <div class="col-md-6" style="text-align:justify;">
            <h4 class="mt-3 fw-bold text-center">Visi </h4>
            <p class=""> <?= $row->visi; ?> </p>
        </div>
    </div>
    <div class="row justify-content-center ms-1 me-1 mt-2">
        <div class="col-md-6" style="text-align:justify;">
            <h4 class="mt-3 fw-bold text-center">Misi </h4>
            <p class=""> <?= $row->misi; ?> </p>
        </div>
    </div>

    
</div>
<br><br><br><br><br><br>