                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Edit Kategori</h1>

                    <form action="<?= base_url('core/kategori/update'); ?>" method="post">
                    <input type="hidden" name="id" value="<?= $row->id_kategori ?>">
                    <table id="table" width="30%">
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for="namakategori">Nama Kategori <b class="text-danger">*</b></label>
                                    <input type="text" name="namakategori" id="namakategori" class="form-control" value="<?= $row->nama_kategori ?>" required>
                                </div>

                            </td>
                        </tr>
                    </table>
                    <a href="<?= base_url('core/kategori'); ?>" class="btn btn-sm btn-danger"><i class="mr-2 bi bi-reply-fill"></i>Kembali</a>
                    <button type="submit" class="btn btn-success btn-sm"><i class="bi bi-save"></i> Update</button>
                    </form>

                    
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->