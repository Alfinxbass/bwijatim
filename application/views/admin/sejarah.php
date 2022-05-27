                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Sejarah</h1>
                    
                    <div class="mb-3">
                        <a href="<?= base_url('core/sejarah/tambah'); ?>" class="btn btn-sm btn-success"><i class=" mr-2 mt-2 bi fa-fw bi-plus-circle-dotted"></i>Tambah Sejarah</a>
                    </div>

                    <?= $this->session->flashdata('message'); ?>
                        <div class=" card shadow mb-4">
                            <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="dataTable" width="50%" cellspacing="0">
                                    <tr>
                                        <td class="text-dark" style="text-align:justify;"><?= $row->isi_sejarah; ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->