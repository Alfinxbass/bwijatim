                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Tambah Literasi</h1>

                    <div class="mb-3">
                        <a href="<?= base_url('core/susorganisasi'); ?>" class="btn btn-sm btn-danger"><i
                                class="mr-2 bi bi-reply-fill"></i>Kembali</a>
                    </div>
                    <form action="<?= base_url('core/susorganisasi/update'); ?>" method="post">
                    <input type="hidden" name="id" value="<?= $row->id ?>">
                    <div class="row">
                    <div class="form-group col-md-12">
                            <div class="card shadow pb-2 col-md-12">
                                <label class="mt-1 text-dark" for="judul"><b>Susunan Organisasi<b class="text-danger">*</b></b></label>
                                <textarea name="isi_susunan" id="isi_susunan" class="form-control ckeditor" cols="30" rows="10"><?= $row->isi_susunan ?></textarea>
                            </div>
                        </div>
                    </div>
                        <div class="ml-3">
                            <button type="submit" class="btn btn-success btn-sm"><i class="bi bi-save"></i> Update</button>
                        </div>
                    </form>


                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->