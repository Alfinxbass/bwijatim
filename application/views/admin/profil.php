<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Profil</h1>

    <div class="card mb-3" style="max-width: 540px;">
        <div class="card-header bg-gradient-success">
            <h5 class="text-white text-center">Profile Card</h5>
        </div>
        <div class="row g-0">
            <div class="col-md-4">
                <img src="<?= base_url('assets/front/img/logo-bwi.png') ?>" class="img-fluid rounded mt-4 ml-3">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold tex-success"><small><?= $anggota['username']; ?></small></h5>
                    <p class="card-text"> <?= $anggota['email']; ?></small></p>
                    <br>
                    <hr class="d-none d-md-block">
                    <p class="card-text"><small class="text-muted"> Administrator Since
                            <?= date('d F Y', strtotime($anggota['created'])); ?></small></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->