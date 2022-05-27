                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Posting</h1>

                    <div class="mb-3">
                        <a href="<?= base_url('core/listpost/tambah'); ?>" class="btn btn-sm btn-success"><i
                                class=" mr-2 mt-2 bi fa-fw bi-plus-circle-dotted"></i>Tambah Post</a>
                    </div>

                    <?= $this->session->flashdata('message'); ?>
                    <div class=" card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="table-dark">
                                        <tr class="">
                                            <th class="text-center">Judul</th>
                                            <th class="text-center">Tanggal</th>
                                            <th class="text-center">Kategori</th>
                                            <th class="text-center">Author</th>
                                            <th class="text-center">Gambar</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table table-hover">
                                        <?php 
                                        
                                            foreach ($rows as $row) :

                                        ?>
                                        <tr>
                                            <td class="col-md-3 text-center"><?=$row->judul ?></td>
                                            <td class="text-center"><?=$row->tanggal ?></td>
                                            <td class="text-center"><?=$row->nama_kategori ?></td>
                                            <td class="text-center"><?=$row->author ?></td>
                                            <td class="text-center">
                                                <img src="<?= base_url('assets/back/img/'. $row->gambar); ?>"
                                                    width="140" height="80">
                                            </td>
                                            <td class="text-center">
                                                <a href="<?= base_url('core/listpost/edit/' . $row->id_post); ?>"
                                                    class="btn btn-sm btn-info"><i class="bi bi-pencil-square"></i></a>
                                                <a href="<?= base_url('core/listpost/hapus/' . $row->id_post); ?>"
                                                    class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Yakin Mau Di Hapus ???')"><i
                                                        class="bi bi-trash"></i></a>
                                            </td>
                                        </tr>

                                        <?php endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->