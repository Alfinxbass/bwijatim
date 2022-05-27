                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Tambah Undang - Undang</h1>

                    <div class="mb-3">
                        <a href="<?= base_url('core/regulasi'); ?>" class="btn btn-sm btn-danger"><i
                                class="mr-2 bi bi-reply-fill"></i>Kembali</a>
                    </div>

                    <?= form_open_multipart('core/regulasi/upload'); ?>
                    <div class="form_group">
                        <div class="card shadow col-md-6 mb-3">
                            <label for="file_name" class="text-dark">Undang - Undang <b
                                    class="text-danger">*</b></label>
                            <input type="file" name="filename" id="filename">
                        </div>
                    </div>
                    <button tyoe="submit" class="btn btn-success btn-sm ml-1"><i class="bi bi-cloud-upload"></i>
                        Upload</button>
                    <?= form_close()?>


                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->