                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Edit Post</h1>

                    <div class="mb-3">
                        <a href="<?= base_url('core/listpost'); ?>" class="btn btn-sm btn-danger"><i class="mr-2 bi bi-reply-fill"></i>Kembali</a>
                    </div>
                    <form action="<?= base_url('core/listpost/update'); ?>" method="post">
                    <input type="hidden" name="id_post" value="<?= $row->id_post ?>">
                    <div class="row">
                        <div class="form-group col-md-9">
                            <div class="card shadow pb-2 col-md-12">
                                <label class="mt-1 text-dark" for="judul"><b>Judul <b class="text-danger">*</b></b></label>
                                <input type="text" name="judul" id="judul" class="form-control" value="<?= $row->judul ?>" required>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <div class="card shadow pb-2 col-md-12">
                                <label class="mt-1 text-dark" for="author"><b>Author <b class="text-danger">*</b></b></label>
                                <input type="text" name="author" id="author" class="form-control" value="<?= $row->author ?>" required>
                            </div>
                        </div>
                        <div class="form-group col-md-9">
                            <div class="card shadow pb-2 col-md-12">
                                <label class="mt-1 text-dark" for="judul"><b>Post<b class="text-danger">*</b></b></label>
                                <textarea name="post" id="post" class="form-control ckeditor" cols="30" rows="10"><?= $row->post ?></textarea>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <div class="card shadow pb-2 col-md-12 ">
                                <label class="mt-1 text-dark" for="kategori"><b>Kategori <b class="text-danger">*</b></b></label>
                                <select name="id_kategori" id="id_kategori"> 
                                    <option selected disabled>-Pilih-</option>
                                    <?php foreach ($kategori as $ktg) : ?>
                                        <option value="<?= $ktg->id_kategori ?>" <?= $row->id_kategori == $ktg->id_kategori ? 'selected' : '' ?>><?= $ktg->nama_kategori ?></option>
                                    <?php endforeach ; ?>
                                </select>
                                <br>
                                <label class="mt-1 text-dark" for="gambar"><b>Gambar <b class="text-danger">*</b></b></label>
                                <input type="file" class="form-control" name="gambar" id="gambar" value="<?= $row->gambar ?>">
                                <br>
                                <label class="mt-1 text-dark" for="gambar"><b>Tanggal <b class="text-danger">*</b></b></label>
                                <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?= $row->tanggal ?>">
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
