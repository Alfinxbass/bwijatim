<div class="super_container">

    <div class="home ms-0">
        <div class="breadcrumbs_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="<?= base_url(); ?>" style="text-decoration:none;" class="">Beranda</a></li>
                                <li>Literasi Wakaf</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <h3>Literasi Wakaf</h3>
                <div class="col-md-12" style="text-align:justify;" >
                    <p>Wakaf merupakan istilah dari bahasa Arab ‘waqaf’. istilah wakaf secara bahasa berarti penahanan atau larangan atau menyebabkan sesuatu berhenti. Istilah wakaf secara istilah diartikan berbeda-beda menurut pandangan ahli fiqih. Menurut Abu hanifah, wakaf adalah menahan suatu benda sesuai hukum yang ada, dan menggunakan manfaatnya untuk hal-hal kebaikan, bahkan harta yang sudah diwakafkan bisa ditarik kembali oleh si pemberi wakaf. Berdasarkan definisi Abu hanifah, kepemilikan harta tidak lepas dari si wakif, pihak yang mewakafkan harta benda nya.</p>
                    <p>Secara umum wakaf harus memenuhi beberapa hal utama yaitu yang memberikan wakaf dan pengelola harta wakaf harus mengalokasikan untuk amal kebaikan.</p>
                    <p>Selain itu pemberian wakaf harus bertujuan untuk beramal kepada penerima atau kelompok yang jelas. Oleh sebab itu, terdapat hukum untuk mengatur pemberian wakaf yang dibahas dalam buku Hukum Wakaf Tunai.</p>
                </div>
        </div>

        <div class="row">
            <h3 class="mt-3">Kumpulan Literasi Wakaf</h3>
            <div class="col-md-6">
                <?php foreach ($lit as $key => $value) {?>
                
                    <div class="list-group mt-2">
                        <a href="<?= base_url('literasi/detail_literasi/' . $value->id) ?>" class="list-group-item list-group-item-action"><i class="bi bi-file-earmark-check-fill text-success mr-2"></i><?= $value->judul; ?></a>
                    </div>
                <?php }; ?>
            </div>
        </div>
    </div>
    
</div>