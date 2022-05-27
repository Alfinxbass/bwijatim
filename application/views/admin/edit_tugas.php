                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Edit Tugas & Wewenang</h1>

                    <div class="mb-3">
                        <a href="<?= base_url('core/tugas'); ?>" class="btn btn-sm btn-danger"><i
                                class="mr-2 bi bi-reply-fill"></i>Kembali</a>
                    </div>
                    <?= form_open_multipart('core/tugas/update'); ?>
                    <div class="row">
                        <div class="form-group col-md-9">
                            <div class="card shadow pb-2 col-md-12">
                                <label class="mt-1 text-dark" for="isi_tugas"><b>Tugas & Wewenang<b
                                            class="text-danger">*</b></b></label>
                                <textarea name="isi_tugas" id="isi_tugas" class="form-control ckeditor" cols="30" rows="10"
                                    required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="ml-3">
                        <button type="submit" class="btn btn-success btn-sm"><i class="bi bi-save"></i>
                            Simpan</button>
                    </div>
                    <?= form_close();?>


                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->