                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Regulasi</h1>
                    
                    <div class="mb-3">
                        <a href="<?= base_url('core/regulasi/tambah'); ?>" class="btn btn-sm btn-success"><i class=" mr-2 mt-2 bi fa-fw bi-plus-circle-dotted"></i>Tambah Regulasi</a>
                        <a href="<?= base_url('core/regulasi/edit/' . $row->id_regulasi); ?>" class="btn btn-sm btn-primary"><i class=" mr-2 mt-2 bi fa-fw bi-plus-circle-dotted"></i>Edit Regulasi</a>
                    </div>

                    <?= $this->session->flashdata('message'); ?>
                        <div class=" card shadow mb-4">
                            <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="dataTable" width="100%" cellspacing="0">
                                    <tr>
                                        <td><?= $row->isi_regulasi ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <h1 class="h3 mb-4 text-gray-800">Undang - Undang Wakaf</h1>

                    <div class="mb-3">
                        <a href="<?= base_url('core/regulasi/tambah_uu'); ?>" class="btn btn-sm btn-success"><i class=" mr-2 mt-2 bi fa-fw bi-plus-circle-dotted"></i>Tambah UU</a>
                    </div>
                    <div class=" card shadow mb-4">
                            <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="table-dark">
                                        <tr class="">
                                            <th class="col-md-1 text-center">No</th>
                                            <th class="text-center">Undang - Undang</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table table-hover">

                                    <?php $no = 1;
                                    foreach ($uu as $uuw) : ?>

                                        <tr>
                                            <td class="text-center"><?= $no++ ?></td>
                                            <td><?= $uuw->nama_file ?></td>
                                            <td class="text-center">
                                                <a href="<?= base_url('core/regulasi/download/'. $uuw->id_uu); ?>" class="btn btn-sm btn-primary"><i class="bi bi-download"></i></a>
                                                <a href="<?= base_url('core/regulasi/hapus/' . $uuw->id_uu); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Mau Di Hapus ???')"><i class="bi bi-trash"></i></a>
                                            </td>
                                        </tr>

                                    <?php endforeach ; ?>
                                    
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->