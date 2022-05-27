                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Kategori Posting</h1>

                    <div class="mb-3">
                        <a href="<?= base_url('core/kategori/tambah'); ?>" class="btn btn-sm btn-success"><i class=" mr-2 mt-2 bi fa-fw bi-plus-circle-dotted"></i>Tambah Kategori</a>
                    </div>

                    <!-- DataTales -->
                        <?= $this->session->flashdata('message'); ?>
                        <div class=" card shadow mb-4">
                            <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="table-dark">
                                        <tr class="">
                                            <th class="col-md-1 text-center">No</th>
                                            <th class="text-center">Kategori</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table table-hover">

                                    <?php $no = 1;
                                    foreach ($rows as $row) : ?>

                                        <tr>
                                            <td class="text-center"><?= $no++ ?></td>
                                            <td><?= $row->nama_kategori ?></td>
                                            <td class="text-center">
                                                <a href="<?= base_url('core/kategori/edit/' . $row->id_kategori); ?>" class="btn btn-sm btn-info"><i class="bi bi-pencil-square"></i></a>
                                                <a href="<?= base_url('core/kategori/hapus/' . $row->id_kategori); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Mau Di Hapus ???')"><i class="bi bi-trash"></i></a>
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