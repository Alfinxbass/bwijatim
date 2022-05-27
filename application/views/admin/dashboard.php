                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    <h5><a class="text-dark" style="text-decoration:none;" href="<?= base_url('core/listpost'); ?>"><b>Berita</b></a></h5></div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jml_post; ?></div>
                                                </div>
                                                <div class="col-auto">
                                                <a class="text-primary" style="text-decoration:none;" href="<?= base_url('core/listpost'); ?>">
                                                    <i class="fas fa-solid fa-newspaper fa-3x text-gray"></i>
                                                </a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    <h5 ><a class="text-dark" style="text-decoration:none;" href="<?= base_url('core/kategori'); ?>"><b>Kategori</b></a></h5></div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jml_kategori; ?></div>
                                                </div>
                                                <div class="col-auto">
                                                <a class="text-success" style="text-decoration:none;" href="<?= base_url('core/kategori'); ?>">
                                                    <i class="fas fa-list fa-3x text-gray"></i>
                                                </a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                        </div>
                    </div>
                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->