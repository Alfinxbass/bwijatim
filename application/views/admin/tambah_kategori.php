                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Tambah Kategori</h1>

                    <div class="mb-3">
                        <a href="<?= base_url('core/kategori'); ?>" class="btn btn-sm btn-danger"><i class="mr-2 bi bi-reply-fill"></i>Kembali</a>
                        <button type="button" class="btn btn-sm btn-primary" id="tambah_form"><i class="bi bi-patch-plus" ></i> Tambah Form Kategori</button>
                    </div>

                    <form action="<?= base_url('core/kategori/simpan'); ?>" method="post">
                    <table id="table" width="30%">
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for="namakategori">Nama Kategori <b class="text-danger">*</b></label>
                                    <input type="text" name="namakategori[]" id="namakategori" class="form-control" required>
                                </div>

                            </td>
                            <td>
                                <button type="button" id="minus" class="btn btn-sm btn-danger" style="margin-top: 15px; margin-left:10px;" disabled><i class="bi bi-dash-circle"></i></button>
                            </td>
                        </tr>
                    </table>
                    <button type="reset" class="btn btn-secondary btn-sm"><i class="bi bi-arrow-counterclockwise"></i> Reset</button>
                    <button type="submit" class="btn btn-success btn-sm"><i class="bi bi-save"></i> Simpan</button>
                    </form>

                    
                </div>
                <!-- /.container-fluid -->
                
                </div>
                <!-- End of Main Content -->

<script>
    $(document).ready(function() {
        $('#tambah_form').on('click', function() {
            $('#table').append(`
            <tr>
                            <td>
                                <div class="form-group">
                                    <label for="namakategori">Nama Kategori</label>
                                    <input type="text" name="namakategori[]" id="namakategori" class="form-control" required>
                                </div>
                            </td>
                            <td>
                                <button type="button" id="minus" class="btn btn-sm btn-danger" style="margin-top: 15px; margin-left:10px;"><i class="bi bi-dash-circle"></i></button>
                            </td>
                        </tr>
            `)
        })
    
        $('#table').on('click','#minus', function () {
            $(this).closest("tr").remove();
        });

    });
</script>
                
            