                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Tambah Visi & Misi</h1>

                    <div class="mb-3">
                        <a href="<?= base_url('core/visimisi'); ?>" class="btn btn-sm btn-danger"><i
                                class="mr-2 bi bi-reply-fill"></i>Kembali</a>
                    </div>
                    <?= form_open_multipart('core/visimisi/simpan'); ?>
                    <div class="row">
                        <div class="form-group col-md-9">
                            <div class="card shadow pb-2 col-md-12">
                                <label class="mt-1 text-dark" for="visi"><b>Visi<b
                                            class="text-danger">*</b></b></label>
                                <textarea name="visi" id="visi" class="form-control ckeditor" cols="30" rows="10"
                                    required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-9">
                            <div class="card shadow pb-2 col-md-12">
                                <label class="mt-1 text-dark" for="misi"><b>Misi<b
                                            class="text-danger">*</b></b></label>
                                <textarea name="misi" id="misi" class="form-control ckeditor" cols="30" rows="10"
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