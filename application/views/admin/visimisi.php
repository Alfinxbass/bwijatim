                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Visi & Misi</h1>
                    
                    <div class="mb-3">
                        <a href="<?= base_url('core/visimisi/tambah'); ?>" class="btn btn-sm btn-success"><i class=" mr-2 mt-2 bi fa-fw bi-plus-circle-dotted"></i>Tambah Visi Misi</a>
                    </div>

                    <?= $this->session->flashdata('message'); ?>
                    <div class=" card shadow">
                            <div class="row justify-content-center">
                                    <div class="col-md-6">
                                    <div class="card-body text-dark  ">
                                            <h4 style="text-align:center;">Visi</h4>
                                            <tr >
                                                <td class="text-dark" style="text-align:justify;"><?= $row->visi; ?></td>
                                            </tr>
                                            <h4 style="text-align:center;">Misi</h4>
                                            <tr>
                                                <td class="text-dark" style="text-align:justify;"><?= $row->misi; ?></td>
                                            </tr>
                                    </div>
                                </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->