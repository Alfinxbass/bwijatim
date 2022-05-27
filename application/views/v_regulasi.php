<div class="super_container">

    <div class="home ms-0">
        <div class="breadcrumbs_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="<?= base_url(); ?>" style="text-decoration:none;" class="">Beranda</a></li>
                                <li>Regulasi</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center ms-1 me-1 mt-2">
        <div class="col-md-9" style="text-align:justify;">
            <h4 class="mt-3 fw-bold">Regulasi wakaf</h4>
            <p class=""> <?= $row->isi_regulasi; ?> </p>
        </div>
    </div>

    <div class="row justify-content-center ms-1 me-1">
        <div class="col-md-9">
            <h4 class="mt-3 fw-bold">Undang - Undang Wakaf Indonesia</h4>
            <div class="card shadow mb-4 mt-3">
                <div class="card-body">
                    <div class="tabel-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Undang - Undang</th>
                                    <th scope="col">Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($uu as $uuw) : ?>

                                <tr>
                                    <td class="text-center"><?= $no++ ?></td>
                                    <td><?= $uuw->nama_file ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url('regulation/download/' . $uuw->id_uu); ?>"
                                            class="btn-sm btn-danger"><i class="bi bi-download"></i></a>
                                    </td>
                                </tr>

                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>